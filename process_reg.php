<div style="text-align: center; font-size: 1.2rem;">
<?php
require 'conn/conn.php';
$username = "";
$email = "";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_date = date("Y-m-d H:i:s");

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Username already taken";
    } else if (mysqli_num_rows($res_e) > 0) {
        $email_error = "E-Mail already taken";
    } 
      else if (!preg_match("#.*^(?=.{10,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
        $pwd_error = "Use 10-20 characters. [a-z], [A-Z], [0-9] and [%,$,&,...]";
        } 

      else {
        $to = $email;

        $subject = 'Your username for QAQuestio';

        $message .= '<p>Welcome! Your username for QAQuestio login: </br>';
        $message .= '' . $username . '';

        $headers = "From: office@qaquest.io\r\n";
        $headers .= "Reply-To: office@qaquest.io\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        // Initialize auto-fav questions (Do not use single qutoe ('eg') within text. Use &quot; or accent marks instead (`eg`). Otherwise variables will not be added to database)

        // TOP FAV

        // 11_de
        $fav11_de = "Nimm Dir einen Moment Zeit.";
        $fav_key111_de = "nimm";
        $fav_key112_de = "Moment";

        // en
        $fav11_en = "Take a moment.";
        $fav_key111_en = "take";
        $fav_key112_en = "moment";

        // pt
        $fav11_pt = "Pare por um momento.";
        $fav_key111_pt = "pare";
        $fav_key112_pt = "momento";

        // 12_de
        $fav12_de = "Nimm Dir ein Blatt Papier.";
        $fav_key121_de = "nimm";
        $fav_key122_de = "Papier";

        // en
        $fav12_en = "Take a sheet of paper.";
        $fav_key121_en = "take";
        $fav_key122_en = "paper";

        // pt
        $fav12_pt = "Pegue um folha de papel.";
        $fav_key121_pt = "pegue";
        $fav_key122_pt = "folha";

        // 13_de
        $fav13_de = "Was möchte ich heute tun?";
        $fav_key131_de = "möchte";
        $fav_key132_de = "tun";

        // en
        $fav13_en = "What do I want to do today?";
        $fav_key131_en = "want";
        $fav_key132_en = "do";

        // pt
        $fav13_pt = "O que eu quero fazer hoje?";
        $fav_key131_pt = "quero";
        $fav_key132_pt = "fazer";

        
        // 14_de
        $fav14_de = " Was sollte ich tun? Was verhilft mir zu Klarheit?";
        $fav_key141_de = "sollte";
        $fav_key142_de = "tun";

        // en
        $fav14_en = "What should I do? How do I gain clarity?";
        $fav_key141_en = "should";
        $fav_key142_en = "do";

        // pt
        $fav14_pt = "O que eu devia fazer hoje? Como posso ter clareza?";
        $fav_key141_pt = "devia";
        $fav_key142_pt = "fazer";
        
        
        // 15_de
        $fav15_de = "Um Fragen und Antworten zu erstellen, zu bearbeiten oder zu entfernen gehe auf &quot;Liste&quot;.";
        $fav_key151_de = "Fragen";
        $fav_key152_de = "erstellen";

        // en
        $fav15_en = "To create, edit or remove questions and answers got to &quot;List&quot;.";
        $fav_key151_en = "create";
        $fav_key152_en = "questions";

        // pt
        $fav15_pt = "Para criar, editar ou remover perguntas e respostas clique em &quot;Lista&quot;.";
        $fav_key151_pt = "criar";
        $fav_key152_pt = "perguntas";

        // WISHES / STEPS / HELP / OBSTACLES

        // 20_de
        $fav20_de = "Wonach sehnst Du Dich?";
        $fav_key201_de = "sehnst";
        $fav_key202_de = "du";

        // en
        $fav20_en = "What are you longing for?";
        $fav_key201_en = "what";
        $fav_key202_en = "longing";

        // pt
        $fav21_pt = "O que você deseja?";
        $fav_key211_pt = "o que";
        $fav_key212_pt = "deseja";


        /*
      
        // 21_de
        $fav21_de = "Was wünsche ich mir? Was hoffe ich? Worauf möchte ich hinarbeiten?";
        $fav_key211_de = "wünsche";
        $fav_key212_de = "mir";

        // en
        $fav21_en = "What do I wish for? What do I hope? What do I want to work towards?";
        $fav_key211_en = "wish";
        $fav_key212_en = "for";

        // pt
        $fav21_pt = "O que eu desejo? O que eu espero? Para o que eu quero trabalhar?";
        $fav_key211_pt = "o que";
        $fav_key212_pt = "desejo";

        

        // 22_de
        $fav22_de = "Was genau muss ich dafür tun?";
        $fav_key221_de = "dafür";
        $fav_key222_de = "tun";

        // en
        $fav22_en = "What exactly do I have to do for it? ";
        $fav_key221_en = "do";
        $fav_key222_en = "for it";
        
        // pt
        $fav22_pt = "O que exatamente eu preciso fazer para isso?";
        $fav_key221_pt = "fazer";
        $fav_key222_pt = "para isso";    

        // 23_de
        $fav23_de = "Wer oder was könnte mir dabei helfen?";
        $fav_key231_de = "dabei";
        $fav_key232_de = "helfen";

        // en
        $fav23_en = "Who or what could help me?";
        $fav_key231_en = "help";
        $fav_key232_en = "me";

        // pt
        $fav23_pt = "Quem ou o que pode me ajudar?";
        $fav_key231_pt = "pode";
        $fav_key232_pt = "ajudar";

        // 24_de
        $fav24_de = "Was könnte für mich dabei herausfordernd sein oder mich abhalten? Warum?";
        $fav_key241_de = "könnte";
        $fav_key242_de = "herausfordernd";

        // en
        $fav24_en = "What could be challenging for me or stopping me? Why?";
        $fav_key241_en = "could";
        $fav_key242_en = "challenging";

        // pt
        $fav24_pt = "O que pode ser um desafio para mim ou me impedir? Porque?";
        $fav_key241_pt = "pode";
        $fav_key242_pt = "desafio";

        // HABITS MINDSETS

        // 31_de
        $fav31_de = "Welche Haltung, welche Gewohnheiten, welche Fragen helfen mir? Welche nicht?";
        $fav_key311_de = "Gewohnheiten";
        $fav_key312_de = "helfen";

        // en
        $fav31_en = "Which mindset, which habits, which questions help me? Which don`t?";
        $fav_key311_en = "habits";
        $fav_key312_en = "help";

        // pt
        $fav31_pt = "Que mentalidade, quais hábitos, quais perguntas me ajudam? Quais não?";
        $fav_key311_pt = "hábitos";
        $fav_key312_pt = "ajudam";

        // 32_de
        $fav32_de = "Was gibt mir das Gefühl, eine Aufgabe gut erledigt zu haben?";
        $fav_key321_de = "Gefühl";
        $fav_key322_de = "Aufgabe";

        // en
        $fav32_en = "When do you feel like I`ve done a task well?";
        $fav_key321_en = "feel";
        $fav_key322_en = "task";

        // pt
        $fav32_pt = "O que me faz sentir que eu fiz um bom trabalho?";
        $fav_key321_pt = "sentir";
        $fav_key322_pt = "trabalho";

        // 33_de
        $fav33_de = "Was mache ich gerne? Was gefällt mir? Wie belohne ich mich?";
        $fav_key331_de = "mache";
        $fav_key332_de = "gerne";

        // en
        $fav33_en = "What do I like to do? What do I like? What brings me joy? How do I reward myself?";
        $fav_key331_en = "like";
        $fav_key332_en = "to do";

        // pt
        $fav33_pt = "O que me traz alegria? O que eu gosto? Como eu me recompenso?";
        $fav_key331_pt = "traz";
        $fav_key332_pt = "alegria";

        // 34_de
        $fav34_de = "Was gibt mir das Gefühl, es kaum erwarten zu können, dass der Tag beginnt? Vielleicht nicht an allen, aber vielleicht an manchen Tagen.";
        $fav_key341_de = "kaum";
        $fav_key342_de = "erwarten";

        // en
        $fav34_en = "What makes me feel like I can`t wait for the day to begin? Maybe not every day, but perhaps on some.";
        $fav_key341_en = "can`t";
        $fav_key342_en = "wait";

        // pt
        $fav34_pt = "O que me faz sentir que não posso esperar pelo dia começar? Talvez não todos os dias, mas talvez em alguns.";
        $fav_key341_pt = "não posso";
        $fav_key342_pt = "esperar";

        // 35_de
        $fav35_de = "Was bedeutet &quot;Unbeschwertheit&quot;, &quot;Leichtigkeit&quot; für mich? Was verbinde ich damit? Wann spüre ich sie? Was nimmt sie mir?";
        $fav_key351_de = "bedeutet";
        $fav_key352_de = "Leichtigkeit";

        // en
        $fav35_en = "What does &quot;light-heartedness&quot; mean to me? What do I associate with it? When do I feel it? What takes it away?";
        $fav_key351_en = "light-heartedness";
        $fav_key352_en = "mean";

        // pt
        $fav35_pt = "O que significa &quot;leveza&quot; para mim? O que eu associo a ela? Quando eu a sinto? O que tira ela de mim?";
        $fav_key351_pt = "significa";
        $fav_key352_pt = "leveza";

         // 36_de
        $fav36_de = "Sei aufmerksam.";
        $fav_key361_de = "sei";
        $fav_key362_de = "aufmerksam";

        // en
        $fav36_en = "Be mindful.";
        $fav_key361_en = "be";
        $fav_key362_en = "mindful";

        // pt
        $fav36_pt = "Fique atento.";
        $fav_key361_pt = "fique";
        $fav_key362_pt = "atento";

        // 37_de
        $fav37_de = "Mache Dir Notizen.";
        $fav_key371_de = "mache";
        $fav_key372_de = "Notizen";

        // en
        $fav37_en = "Take notes.";
        $fav_key371_en = "take";
        $fav_key372_en = "notes";

        // pt
        $fav36_pt = "Faça as suas anotações.";
        $fav_key371_pt = "faça";
        $fav_key372_pt = "anotações";


        // FURTHER USEFUL HABITS AND QUESTIONS

        // 41_de
        $fav41_de = "Welche Momente geben mir Ruhe, Klarheit? Wann bin ich konzentriert?";
        $fav_key411_de = "geben";
        $fav_key412_de = "Ruhe";

        // en
        $fav41_en = "Which moments give me a peace of mind, clarity? When am I focused?";
        $fav_key411_en = "give";
        $fav_key412_en = "peace of mind";

        // pt
        $fav41_pt = "Quais momentos me dão paz, clareza? Quando estou focado?";
        $fav_key411_pt = "dão";
        $fav_key412_pt = "paz";

        // 42_de
        $fav42_de = "Was inspiriert mich? Worüber kann ich staunen? Wovor habe ich Demut? Was weckt meine Neugierde?";
        $fav_key421_de = "inspiriert";
        $fav_key422_de = "mich";

        // en
        $fav42_en = "What inspires me? What makes me amezed? What makes me humble? What sparks my curiosity?";
        $fav_key421_en = "inspires";
        $fav_key422_en = "me";

        // pt
        $fav42_pt = "O que me inspira? O que eu admiro? De que eu sinto humildade? O que desperta minha curiosidade?";
        $fav_key421_pt = "me";
        $fav_key422_pt = "inspira";

        // (FIRST) AID

        // 51_de
        $fav51_de = "Was nimmt mir die Ruhe? Was stört mich? Warum? Ist es wichtig?";
        $fav_key511_de = "nimmt";
        $fav_key512_de = "Ruhe";

        // en
        $fav51_en = "What takes away my calm? What bothers me? Why? Is it important?";
        $fav_key511_en = "takes";
        $fav_key512_en = "calm";

        // pt
        $fav51_pt = "O que tira a paz de mim? O que me incomoda? Isso é importante?";
        $fav_key511_pt = "tira";
        $fav_key512_pt = "paz";

        // 52_de
        $fav52_de = "Versuche es so genau wie möglich zu beschreiben. Nimm ein Blatt Papier. Nutze das Schreiben als Ventil.";
        $fav_key521_de = "versuche";
        $fav_key522_de = "beschreiben";

        // en
        $fav52_en = "Try to describe it as precisely as possible. Take a piece of paper. Use writing as relief valve.";
        $fav_key521_en = "try";
        $fav_key522_en = "describe";

        // pt
        $fav52_pt = "Tente descrevê-lo da maneira mais precisa possível. Pegue uma folha de papel. Use a escrita como válvula de escape.";
        $fav_key521_pt = "tente";
        $fav_key522_pt = "descrevê-lo";

        // 53_de
        $fav53_de = "Sind die Dinge so wie ich denke? Könnten Sie auch anders sein? Könnte ich sie auch anders sehen? Worum geht es im Wesentlichen?";
        $fav_key531_de = "könnten";
        $fav_key532_de = "anders";

        // en
        $fav53_en = "Are things the way I think they are? Could they be different? Could I also see them in a different way? What is it essentially about?";
        $fav_key531_en = "could";
        $fav_key532_en = "different";

        // pt
        $fav53_pt = "As coisas são do jeito que eu penso que são? Eles poderiam ser diferentes? Eu poderia vê-los de uma maneira diferente? Do que se trata essencialmente?";      
        $fav_key531_pt = "ser";
        $fav_key532_pt = "diferentes";

        // 54_de
        $fav54_de = "Was ist mir wichtig? Was gibt mir Zuversicht? Worauf vertraue ich? Wer oder was tröstet mich?";
        $fav_key541_de = "was";
        $fav_key542_de = "wichtig";

        // en
        $fav54_en = "What is important to me? What gives me confidence? What do I trust? Who or what comforts me?";
        $fav_key541_en = "what";
        $fav_key542_en = "important";

        // pt
        $fav54_pt = "O que é importante para mim? O que me traz confiança? Em que eu confio? Quem ou o que me conforta?";
        $fav_key541_pt = "o que";
        $fav_key542_pt = "importante";

        // WHAT I HAVE LEARNED SO FAR / GENERAL QUESTIONS

        // 61_de
        $fav61_de = "Wer bin ich? Was sind meine Eigenheiten?";
        $fav_key611_de = "wer";
        $fav_key612_de = "bin";

        // en
        $fav61_en = "Who am I? What are my characteristics?";
        $fav_key611_en = "who";
        $fav_key612_en = "am";

        // pt
        $fav61_pt = "Quem sou eu? Quais são as minhas características?";
        $fav_key611_pt = "quem";
        $fav_key612_pt = "sou";

        // 62_de
        $fav62_de = "Was hilft mir bei... wennn... mit...?";
        $fav_key621_de = "was";
        $fav_key622_de = "hilft";

        // en
        $fav62_en = "What helps me with... when... if...?";
        $fav_key621_en = "what";
        $fav_key622_en = "helps";

        // pt
        $fav62_pt = "O que me ajuda com... quando... se...?";
        $fav_key621_pt = "o que";
        $fav_key622_pt = "ajuda"; */

        // QAQuest FAQ

        // 71_de
        $fav71_de = "Wie funktioniert das?";
        $fav_key711_de = "wie";
        $fav_key712_de = "funktioniert";

        // en
        $fav71_en = "How does this work?";
        $fav_key711_en = "how";
        $fav_key712_en = "work";

        // pt
        $fav71_pt = "Como funciona isso?";
        $fav_key711_pt = "como";
        $fav_key712_pt = "funciona";

        // Initialize auto-fav Answers

        $fav_ans01_de = "Drücke hier auf &quot;Bearbeiten&quot;, um eine Antwort zu ändern...";
        $fav_ans01_en = "Click here on &quot;Edit&quot; to edit an answer...";
        $fav_ans01_pt = "Clique aqui em &quot;Editar&quot; para editar uma resposta...";

        $fav_ans71_de = "QAQuestio ist eine persönliche Suchmaschine, die Du selbst erschaffst.</br>
                         Um herauszufinden wie das funktioniert, gehe auf ( i ) (Help).";
        $fav_ans71_en = "QAQuestio is a personal search engine that you create yourself.</br>
                         To find out how it works go to ( i ) (Help).";
        $fav_ans71_pt = "QAQuestio é um &quot;site de busca&quot; pessoal que você mesmo vai criar.</br>
                         Para descobrir como isso funciona clique em ( i ) (Help).";

        $lc = "";
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

            if ($lc == "pt") {

                $query1 = "INSERT INTO users (username, email, password, r_date)
           VALUES ('$username', '$email', '" . md5($password) . "', '$r_date')";
                $results = mysqli_query($conn, $query1);
                echo 'Usuário foi criado.</br></br>';
                echo '<br>';
                $query2 = "INSERT INTO data (question, keyw1, keyw2, keyw3, answer, c_date, uid, rating, fav)
            VALUES  ('$fav11_pt', '$fav_key111_pt', '$fav_key112_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '99', '1'),
                    ('$fav12_pt', '$fav_key121_pt', '$fav_key122_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '98', '1'),
                    ('$fav13_pt', '$fav_key131_pt', '$fav_key132_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '97', '1'),
                    ('$fav14_pt', '$fav_key141_pt', '$fav_key142_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '96', '1'),
                    ('$fav15_pt', '$fav_key151_pt', '$fav_key152_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '95', '1'),
                    ('$fav20_pt', '$fav_key201_pt', '$fav_key202_pt', '', '$fav_ans01_pt', '$r_date', LAST_INSERT_ID(), '94', '1'),
                    ('$fav71_pt', '$fav_key711_pt', '$fav_key712_pt', '', '$fav_ans71_pt', '$r_date', LAST_INSERT_ID(), '100', '0')";
                $results = mysqli_query($conn, $query2);
                exit();

            } else if ($lc == "de") {

                $query1 = "INSERT INTO users (username, email, password, r_date)
            VALUES ('$username', '$email', '" . md5($password) . "', '$r_date')";
                $results = mysqli_query($conn, $query1);
                echo 'Registrierung abgeschlossen.';
                echo '<br>';
                $query2 = "INSERT INTO data (question, keyw1, keyw2, keyw3, answer, c_date, uid, rating, fav)
            VALUES  ('$fav11_de', '$fav_key111_de', '$fav_key112_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '99', '1'),
                    ('$fav12_de', '$fav_key121_de', '$fav_key122_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '98', '1'),
                    ('$fav13_de', '$fav_key131_de', '$fav_key132_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '97', '1'),
                    ('$fav14_de', '$fav_key141_de', '$fav_key142_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '96', '1'),
                    ('$fav15_de', '$fav_key151_de', '$fav_key152_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '95', '1'),
                    ('$fav20_de', '$fav_key201_de', '$fav_key202_de', '', '$fav_ans01_de', '$r_date', LAST_INSERT_ID(), '94', '1'),
                    ('$fav71_de', '$fav_key711_de', '$fav_key712_de', '', '$fav_ans71_de', '$r_date', LAST_INSERT_ID(), '100', '0')";
                $results = mysqli_query($conn, $query2);
                echo "<a href='login.php'>Login</a>";
                exit();

            } else { 

                $query1 = "INSERT INTO users (username, email, password, r_date)
            VALUES ('$username', '$email', '" . md5($password) . "', '$r_date')";
                $results = mysqli_query($conn, $query1);
                echo 'User registered.</br></br>';
                echo '<br>';
                $query2 = "INSERT INTO data (question, keyw1, keyw2, keyw3, answer, c_date, uid, rating, fav)
            VALUES  ('$fav11_en', '$fav_key111_en', '$fav_key112_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '99', '1'),
                    ('$fav12_en', '$fav_key121_en', '$fav_key122_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '98', '1'),
                    ('$fav13_en', '$fav_key131_en', '$fav_key132_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '97', '1'),
                    ('$fav14_en', '$fav_key141_en', '$fav_key142_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '96', '1'),
                    ('$fav15_en', '$fav_key151_en', '$fav_key152_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '95', '1'),
                    ('$fav20_en', '$fav_key201_en', '$fav_key202_en', '', '$fav_ans01_en', '$r_date', LAST_INSERT_ID(), '94', '1'),
                    ('$fav71_en', '$fav_key711_en', '$fav_key712_en', '', '$fav_ans71_en', '$r_date', LAST_INSERT_ID(), '100', '0')";
                $results = mysqli_query($conn, $query2);
                echo "<a href='login.php'>Login</a>";
                exit();

            }
        }

    }
}
?>
</div>