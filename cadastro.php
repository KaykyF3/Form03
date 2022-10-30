<?php 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $month = $_POST['month'];
    echo "Olá, ".$name;
    switch ($month) {
        case 1:
            if ($number >= 1 && $number <= 20) {
                echo "</br>".$name.", o seu signo é Capricórnio";
                echo "</br>Motivação é a arte de fazer as pessoas fazerem o que você quer que elas façam porque elas o querem fazer.";
            } elseif ($number >= 21 && $number <= 31) {
                echo "</br>".$name.", o seu signo é Aquário";
                echo "</br>A persistência é o caminho do êxito.";
            }
            break;
        case 2: 
            if ($number >= 1 && $number <= 18) {
                echo "</br>".$name.", o seu signo é Aquário";
                echo "</br>A persistência é o caminho do êxito.";
            } elseif ($number >= 19 && $number <=28) {
                echo "</br>".$name.", o seu signo é Peixes";
                echo "</br>Toda ação humana, quer se torne positiva ou negativa, precisa depender de motivação.";
            }
            break;
        case 3:
            if ($number >= 1 && $number <= 20) {
                echo "</br>".$name.", o seu signo é Peixes";
                echo "</br>No meio da dificuldade encontra-se a oportunidade.";
            } elseif ($number >= 21 && $number <=31) {
                echo "</br>".$name.", o seu signo é Áries";
                echo "</br>Eu faço da dificuldade a minha motivação. A volta por cima vem na continuação.";
            }
            break;
        case 4: 
            if ($number >= 1 && $number <= 20) {
                echo "</br>".$name.", o seu signo é Áries";
                echo "</br>É parte da cura o desejo de ser curado.";
            } elseif ($number >= 21 && $number <=30) {
                echo "</br>".$name.", o seu signo é Touro";
                echo "</br>É parte da cura o desejo de ser curado.";
            }
            break;
        case 5:
            if ($number >= 1 && $number <= 20) {
                echo "</br>".$name.", o seu signo é Touro";
                echo "</br>O que me preocupa não é o grito dos maus. É o silêncio dos bons.";
            } elseif ($number >= 21 && $number <=31) {
                echo "</br>".$name.", o seu signo é Gêmeos";
                echo "</br>Imagine uma nova história para sua vida e acredite nela.";
            }
            break;
        case 6: 
            if ($number >= 1 && $number <= 20) {
                echo "</br>".$name.", o seu signo é Gêmeos";
                echo "</br>Você precisa fazer aquilo que pensa que não é capaz de fazer.";
            } elseif ($number >= 21 && $number <=30) {
                echo "</br>".$name.", o seu signo é Câncer";
                echo "</br>O sucesso é ir de fracasso em fracasso sem perder o entusiasmo.";
            }
            break;
        case 7: 
            if ($number >= 1 && $number <= 22) {
                echo "</br>".$name.", o seu signo é Câncer";
                echo "</br>Nossa maior fraqueza está em desistir. O caminho mais certo de vencer é tentar mais uma vez.";
            } elseif ($number >= 23 && $number <=31) {
                echo "</br>".$name.", o seu signo é Leão";
                echo "</br>Coragem é a resistência ao medo, domínio do medo, e não a ausência do medo.";
            }
            break;
        case 8: 
            if ($number >= 1 && $number <= 22) {
                echo "</br>".$name.", o seu signo é Leão";
                echo "</br>Quem quer vencer um obstáculo deve armar-se da força do leão e da prudência da serpente.";
            } elseif ($number >= 23 && $number <=31) {
                echo "</br>".$name.", o seu signo é Virgem";
                echo "</br>Acredite, existem pessoas que não procuram beleza, mas sim coração.";
            }
            break;
        case 9: 
            if ($number >= 1 && $number <= 22) {
                echo "</br>".$name.", o seu signo é Virgem";
                echo "</br>Acredite na justiça, mas não a que emana dos demais e sim na tua própria.";
                echo "</br>Um bom começo é a metade.";
            } elseif ($number >= 23 && $number <=30) {
                echo "</br>".$name.", o seu signo é Libra";
                echo "</br>Não abandones as tuas ilusões. Sem elas podes continuar a existir, mas deixas de viver.";
            }
            break;
        case 10:
            if ($number >= 1 && $number <= 22) {
                echo "</br>".$name.", o seu signo é Libra";
                echo "</br>Um bom começo é a metade.";
            } elseif ($number >= 23 && $number <=31) {
                echo "</br>".$name.", o seu signo é Escorpião";
                echo "</br>É claro que a motivação não é permanente. Tomar banho também não é; mas é algo que você deve fazer regularmente.";
            }
            break;
        case 11:
            if ($number >= 1 && $number <= 21) {
                echo "</br>".$name.", o seu signo é Escorpião";
                echo "</br>Acredite que você pode, assim você já está no meio do caminho.";
            } elseif ($number >= 22 && $number <=30) {
                echo "</br>".$name.", o seu signo é Sagitário";
                echo "</br>O mundo pode até fazer você chorar mas Deus te quer sorrindo.";
            }
            break;
        case 12:
            if ($number >= 1 && $number <= 21) {
                echo "</br>".$name.", o seu signo é Sagitário";
                echo "</br>A vida só é preciosa porque termina, garoto. Acredite no que um Deus diz. Vocês mortais não sabem a sorte que têm.";
            } elseif ($number >= 22 && $number <=31) {
                echo "</br>".$name.", o seu signo é Capricórnio";
                echo "</br>A verdadeira motivação não é aquilo que te anima, mas aquilo que te transforma...";
            }
            break;
           
     }
?>