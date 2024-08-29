<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('duvidas', function (Blueprint $table) {
            $table->id();
            $table->text("questao");
            $table->text("resposta");
        });

        DB::table("duvidas")->insert([
            [
                'questao' => "As provas de 2024 serão para qual etapa?",
                'resposta' => "As provas do Paes em 2024 serão para a Primeira e Segunda Etapa."
            ],
            
            [
                'questao' => "Podemos fazer as provas das três etapas de uma só vez?",
                'resposta' => "Inicialmente, não será permitido em 2024."
            ],
            
            [
                'questao' => "Qual o período das inscrições?",
                'resposta' => "--"
            ],

            [
                'questao' => "E como funciona o PAES?",
                'resposta' => "O candidato ao PAES se inscreve, voluntariamente, a partir do 1º ano do Ensino Médio. A grande diferença dessa modalidade de avaliação é que o aluno realiza três exames, uma ao final de cada ano (1°, 2° e 3°), porém a opção pelo curso só ocorre no ano de conclusão do Ensino Médio. No caso específico do Ensino Médio realizado na modalidade de curso técnico, que aumenta para quatro o número de séries no Ensino Médio, os estudantes só começam a realizar as provas no segundo ano. Classifica-se aquele que obtiver o mínimo de 30% dos pontos distribuídos nas três etapas, observando-se a ordem, segundo o número de pontos obtidos.<br><br>O Processo Seriado trata-se de uma avaliação que exige menos tensão do candidato, uma vez que o conteúdo é restrito ao que foi aprendido naquele ano, ao contrário da modalidade tradicional do vestibular, que demanda o que foi assimilado nos três anos de Ensino Médio. A prova do sistema seriado mede o conhecimento do estudante gradualmente e de forma progressiva, o que permite ao aluno acompanhar sua evolução a cada ano viabilizando assim a correção das falhas. Tendo por base a possibilidade de realizar o exame no ano seguinte, os estudantes podem melhorar o desempenho redirecionando os estudos e definindo suas aptidões.<br><br>Depois da realização das três provas, a instituição elabora uma média com os resultados obtidos ao final de cada ano e as vagas destinadas ao processo são preenchidas de acordo com a pontuação dos candidatos. Na Unimontes, o candidato poderá também, no último ano do Ensino Médio, participar do processo seletivo Vestibular próprio, sendo válido o melhor desempenho.<br><br>Em 2024, a realização de duas fases do PAES ao mesmo tempo não será permitida, em decorrência da não existência do processo nos últimos anos, precisamos ajustar todo o processo."
            ],

            [
                'questao' => "Quando será publicado o edital?",
                'resposta' => "O Edital do Paes para o ano de 2024 será publicado no mês de junho de 2024."
            ],

            [
                'questao' => "Quantas vagas a Unimontes ofertará para o PAES?",
                'resposta' => "Serão ofertadas pela Unimontes __________vagas em ________cursos de graduação presenciais"
            ],

            [
                'questao' => "O aluno que participou do PAES poderá também participar do processo seletivo Vestibular próprio da Unimontes?",
                'resposta' => "Sim."
            ],

            [
                'questao' => "Onde serão aplicadas as provas do PAES?",
                'resposta' => "Ao encerrar as inscrições, iniciamos o processo de “enturmação” dos candidatos e alocação destes nos prédios onde farão as provas. Você deverá ficar atento ao site da Coteps, na área do candidato,para obter esta informação."
            ],

            [
                'questao' => "O Edital do PAES é somente destinado aos cursos de graduação presenciais?",
                'resposta' => "Sim. Para os cursos de graduação presenciais em todos os Campi da Unimontes."
            ],

            [
                'questao' => "O candidato poderá fazer a inscrição para o PAES em qualquer Campus da Unimontes e ao final do Terceiro ano do Ensino Médio, se aprovado, estudar em outro Campus da Unimontes?",
                'resposta' => "-"
            ],

            [
                'questao' => "Quais os Sistemas de Concorrência para o PAES?",
                'resposta' => "Teremos dois Sistemas - Sistema I - Sistema de Cotas e Sistema II - Sistema Universal."
            ],

            [
                'questao' => "Quem poderá participar do PAES I?",
                'resposta' => "• Quem estiver cursando o Primeiro Ano do Ensino Médio.<br><br>• Quem tiver cursando o Segundo Ano do Curso Técnico cuja duração seja de quatro anos.<br><br>• E a quem tiver cursando a Modalidade Educação de Jovens e Adultos (EJA) ou outra modalidade supletiva."
            ],

            [
                'questao' => "O aluno do Primeiro Ano do Ensino Médio, já escolhe o curso de graduação?",
                'resposta' => "Não. Ele só irá escolher o curso no PAES III."
            ],

            [
                'questao' => "Se o aluno zerar a prova do PAES I, ele já está fora do processo?",
                'resposta' => "Não. É condição necessária para participar do PAES II, ter feito as provas do PAES I no ano anterior e, para participar do PAES III, ter participado do PAES II no ano anterior."
            ],

            [
                'questao' => "Se o aluno zerar a prova do PAES I, ele já está fora do processo?",
                'resposta' => "Não. Os alunos do PAES I e PAES II não serão excluídos dos processos caso obtenham nota zero em qualquer prova."
            ],

            [
                'questao' => "Receberei algum comunicado da Coteps pelo correio?",
                'resposta' => "Não. Todos os comunicados da Coteps para o candidato serão encaminhados via e-mail ou comunicados no site da Coteps, ou na área do candidato."
            ],

            [
                'questao' => "Quais os documentos são considerados válidos para o acesso aos prédios no dia da prova do vestibular da Unimontes?",
                'resposta' => "Para acesso ao prédio e às salas em que serão realizadas as provas, o candidato deverá apresentar o Documento Oficial de Identificação original (com foto) e em perfeitas condições. Serão aceitos, para identificação, os seguintes documentos: Carteira de Identidade, Carteira de Trabalho, Passaporte, Carteira de Reservista (com foto), Carteira de Órgão ou Conselho de Classe (CRA, CREA, CRC, CORECON, COREN etc.), Carteira de Motorista.<br><br>Atenção: No caso de documentos vencidos, poderão ser aceitos, a critério da Coteps, mediante Termo de Identificação Especial. Não serão aceitos como documentos de identificação: Certidões de Nascimento ou de Casamento, Títulos Eleitorais, Carteiras de Estudante, carteiras funcionais sem valor de identidade, bem como documentos ilegíveis e não identificáveis. Não serão aceitos documentos digitais para fins de identificação.<br><br>No dia de realização das provas, caso o candidato esteja impossibilitado de apresentar Documento Oficial de Identificação original (com foto), por motivo de perda, furto ou roubo, deverá ser apresentado Boletim de Ocorrência ou documento equivalente, expedido há, no máximo, 30 dias, por órgão policial. Nesse caso, o candidato será submetido à identificação especial, a qual compreende coleta de assinaturas e impressão digital em formulário próprio. A equipe de coordenação do prédio em que as provas estiverem sendo aplicadas poderá, conforme a necessidade, fazer a identificação especial do candidato que apresentar documento (mesmo sendo original) que impossibilite precisa identificação. Em hipótese alguma, o candidato fará as provas, caso não apresente a documentação exigida ou não cumpra a norma estabelecida para identificação, neste Edital."
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duvidas');
    }
};
