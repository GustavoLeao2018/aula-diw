<?php

    $nome_do_usuario = $_POST["nome"];
    $genero = $_POST["genero"];
    $data_de_nascimento = $_POST["data_de_nascimento"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $cidade = $_POST["cidade"];
    $areas_de_atuacao = $_POST["areas_de_atuacao"];
    $formacao = $_POST["formacao"];
    $historico = $_POST["historico"];
    $curriculo = $_POST["curriculo"];
    $horas_semanais = $_POST["horas_semanais"];
    $data_intrevista = $_POST["data_intrevista"];
    $hora_intrevista = $_POST["hora_intrevista"];

    echo "<p><b>Seu nome:</b> $nome_do_usuario</p>";
    echo "<p><b>Seu gênero:</b> $genero</p>";
    echo "<p><b>Sua data de nascimento</b> $data_de_nascimento</p>";
    echo "<p><b>Seu email:</b> $email</p>";
    echo "<p><b>Seu site:</b> $url</p>";
    echo "<p><b>Seu endereço:</b> $endereco</p>";
    echo "<p><b>Seu telefone:</b> $telefone</p>";
    echo "<p><b>Sua cidade:</b> $cidade</p>";
    echo "<p><b>Áreas de atuação:</b> $areas_de_atuacao</p>";
    echo "<p><b>Sua formação:</b> $formacao</p>";
    echo "<p><b>Seu histórico profissional:</b> $historico</p>";
    echo "<p><b>Seu currículo:</b> $curriculo</p>";
    echo "<p><b>A sua disponibilidade de horas semanais:</b> $horas_semanais</p>";
    echo "<p><b>A data da sua intrevista:</b> $data_intrevista</p>";
    echo "<p><b>A hora da sua intrevista:</b> $hora_intrevista</p>";
    


?>