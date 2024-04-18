<?php
    function checar() {
    
    $paym = [
        "produto" => "Camisa DnD - Tamanho M",
        'dia_pag' => 1,
        'mes_pag' => 2,
        'ano_pag' => 2024,
        "pago" => false
    ];
    
    if ($paym['dia_pag'] < 2 and
        $paym['mes_pag'] <= 2 and 
        $paym['ano_pag'] <= 2024) {
        $paym['pago'] = true;
    }
    
    echo $paym['pago'] ? 'Verdadeiro' : 'Falso';
}

checar();

  //////////////////////////////////////////////////////////////////////////

    function media() {
    $aluno =[
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9
        ]
    ];
    
    $fi = $aluno['notas']['prova1']+$aluno['notas']['prova2']+$aluno['notas']['prova3']+$aluno['notas']['prova4'];
    $final = $fi/4;
    
    echo $final;
    
    }
    media();

  //////////////////////////////////////////////////////////////////////////

    function mostrarNomeIdadeAlunos($alunos) {
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno['nome'] . ", Idade: " . $aluno['idade'] . "\n";
    }
}

$alunos = [
    [
        "nome" => "João",
        "idade" => 20
    ],
    [
        "nome" => "Maria",
        "idade" => 22
    ],
    [
        "nome" => "José",
        "idade" => 21
    ]
];
mostrarNomeIdadeAlunos($alunos);

  //////////////////////////////////////////////////////////////////////////


?>
