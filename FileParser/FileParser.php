<?php

/**
 * Utilitário para configurar os arquivos fonte do Playcanvas ao ambiente Laravel
 */
class FileParser {

    /**
     * Diretório dos arquivos fonte
     * @type string
     */
    public static string $srcPath = "scenes/";

    /**
     * Diretório de saída dos arquivos processados
     * @type string
     */
    public static string $destPath = "scenes (parsed)/";

    /**
     * Diretório fonte dos arquivos comuns entre todas as cenas
     * @type string
     */
    public static string $commonDir = "common/";

    /**
     * Diretório no qual os arquivos das cenas se localizarão no projeto Laravel
     * @type string
     */
    public static string $buildDir = "build/scenes";

    /**
     * Nome das cenas a serem processadas
     * @type array
     */
    public static array $scenes = [];

    /**
     * Processa os arquivos fonte gerando arquivos de acordo com a estrutura de projeto Laravel
     * @return bool TRUE -> Em caso de sucesso / FALSE -> Em caso de erro durante a conversão
     */
    public static function parse(): bool
    {
        try {
            /**
             * Carregando as cenas disponíveis
             */
            self::loadScenes();

            /**
             * Realizando a sobrescrita para cada cena 
             */
            foreach (self::$scenes as $scene ) {
                $srcPath = self::$srcPath . $scene;
                $destPath = self::$destPath . $scene;

                chdir($srcPath);

                $files = glob("{*.*}", GLOB_BRACE);

                foreach($files as $file)
                {
                    if ($file !== "__settings__.js" && $file !== "index.html")
                    {
                        file_put_contents(__DIR__ . '/' . $destPath . '/' . $file, file_get_contents(__DIR__ . '/' . $srcPath . "/" . $file));
                        continue;
                    }

                    $content = file_get_contents(__DIR__ . '/' . $srcPath . "/" . $file);
                    file_put_contents(__DIR__ . '/' . $destPath . '/' . $file, self::replaceContent($content, $scene, $files, $file));
                }

                chdir(__DIR__);

                /**
                 * Copiando os assets da cena para o diretório de saída
                 */
                self::xcopy($srcPath . '/files', $destPath . '/files');
            }

            /**
             * Verificando se existem arquivos comuns
             */
            if (is_dir(__DIR__ . self::$commonDir))
            {
                /**
                 * Realizando a sobrescrita para cada cena
                 */
                foreach (self::$scenes as $scene)
                {
                    $srcPath = self::$commonDir;
                    $destPath = self::$destPath . $scene;

                    chdir($srcPath);

                    $files = glob("{*.*}", GLOB_BRACE);

                    foreach ($files as $file)
                    {
                        file_put_contents(__DIR__ . '/' . $destPath . '/' . $file, file_get_contents(__DIR__ . '/' . $srcPath . "/" . $file));
                    }

                    chdir(__DIR__);
                }
            }

            return true;
        } 
        
        catch (\Throwable) {
            return false;
        }
    }

    /**
     * Realiza a sobrescrita do conteúdo dos arquivos
     * @param string $content Conteúdo do arquivo
     * @param string $scene Cena atual
     * @param array $files Lista de todos os arquivos da cena
     * @param string $actualFile Arquivo atual a ser sobrescrito
     * @return string O novo conteúdo do arquivo após a sobrescrita
     */
    public static function replaceContent(string $content, string $scene, array $files, string $actualFile): string
    {
        switch ($actualFile) {
            case "__settings__.js": {
                $tmp = preg_replace(["/ASSET_PREFIX = \"\"/", "/SCRIPT_PREFIX = \"\"/"], ["ASSET_PREFIX = \"" . self::$buildDir. '/' . $scene . "\/\"", "SCRIPT_PREFIX = \"\""], $content);
                return preg_replace("/config.json/", self::$buildDir . '/' . $scene . "/config.json", $tmp);
                break;
            }

            default: {
                /**
                 * Sobrescevendo o caminho referêncial para os arquivos da cena
                 */
                return preg_replace(array_map(function ($file) { return '/'.$file.'/'; }, $files), array_map(function ($file) use ($scene) { return self::$buildDir . '/' . $scene . '/' . $file; }, $files), $content);
            }
        }
    }

    /**
     * Realiza uma deep copy de um diretório
     * @param string $source Diretório de origem
     * @param string $dets Diretório de destino
     * @param int $permissions Permissões do diretório de destino
     * @return bool TRUE -> Caso a operação seja bem sucedida / FALSE -> Caso ocorra uma falha
     */
    public static function xcopy(string $source, string $dest, int $permissions = 0755): bool
    {
        $sourceHash = self::hashDirectory($source);
        // Check for symlinks
        if (is_link($source)) {
            return symlink(readlink($source), $dest);
        }

        // Simple copy for a file
        if (is_file($source)) {
            return copy($source, $dest);
        }

        // Make destination directory
        if (!is_dir($dest)) {
            mkdir($dest, $permissions);
        }

        // Loop through the folder
        $dir = dir($source);
        while (false !== $entry = $dir->read()) {
            // Skip pointers
            if ($entry == '.' || $entry == '..') {
                continue;
            }

            // Deep copy directories
            if($sourceHash != self::hashDirectory($source."/".$entry)){
                self::xcopy("$source/$entry", "$dest/$entry", $permissions);
            }
        }

        // Clean up
        $dir->close();
        return true;
    }

    /**
     * Verifica a integridade / originalidade de um diretório para evitar loops infinitos de cópias
     * @param string $directory Diretório a ser verificado
     */
    public static function hashDirectory($directory)
    {
        if (!is_dir($directory)) return false;

        $files = array();
        $dir = dir($directory);

        while (false !== ($file = $dir->read()))
        {
            if ($file != '.' and $file != '..')
            {
                if (is_dir($directory . '/' . $file)) $files[] = self::hashDirectory($directory . '/' . $file);
                else $files[] = md5_file($directory . '/' . $file);
            }
        }

        $dir->close();

        return md5(implode('', $files));
    }

    /**
     * Carrega o nome das cenas disponíveis no 'buildDir'
     */
    public static function loadScenes(): void
    {
        chdir(__DIR__ . "/scenes");
        self::$scenes = glob('*', GLOB_ONLYDIR);
        chdir(__DIR__);

        self::createFolders();
    }

    /**
     * Cria as pastas de destino caso elas não existam
     */
    public static function createFolders(): void
    {
        if (!is_dir(__DIR__ . '/' . self::$destPath))
            mkdir(__DIR__ . '/' . self::$destPath);

        foreach (self::$scenes as $scene)
        {
            if (!is_dir(__DIR__ . '/' . self::$destPath . $scene))
                mkdir(__DIR__ . '/' . self::$destPath . $scene);
        }

        self::cleanFolders();
    }

    /**
     * Limpa as pastas de saída
     */
    public static function cleanFolders(): void
    {
        foreach(self::$scenes as $scene)
        {
            foreach (glob($scene . '/*') as $subDir)
            {
                unlink($subDir);
            }
        }
    }
}

echo FileParser::parse() ? "success" : "error";

?>