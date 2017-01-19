<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Fragile Cat Lyrics</title>
        <meta name="description" content="A Music Band">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body class="generator">
<article class="article input-form">
                            <form action="" method="post">
                    <div class="input">
                        <p>
                        <label>Yr Lyrics</label>
                        <textarea id="pre_input_text" type="text" name="pos-formula" rows="8" cols="100" style="max-width: 90%;" placeholder="Put lyrics here
But make sure they have
single line breaks in them
like this so that the generator
can create a rhyming scheme"></textarea>
                    </p>
                    <p><a id="tag_lyrics" class="button">Tag Em</a></p>
                </div>
                    <div class="output">
                        <p>
                            <label>Tagged Lyrics</label>
                            <textarea id="input_text" type="text" name="pos-formula" rows="8" cols="100" style="max-width: 90%;" placeholder=""></textarea>
                        </p>
                        <p><input type="submit" value="Generate" id="generate_lyrics" class="button"></input></p>
                    </div>
                </form>
            </article>
<article class="article lyrics">
        <?php
            function wordthatrhymes($word,$relatedword, $code,$syllables) {
                    trim($word);
                    $array = json_decode(file_get_contents("https://api.datamuse.com/words?rel_rhy={$word}&md=p&md=s&ml={$relatedword}"), true);
                    shuffle($array);
                    $test = null;
                    foreach ($array as $array2) {
                        if ((($array2["tags"][1] == $code || $array2["tags"][1] == $code || $array2["tags"][2] == $code) and $array2["numSyllables"] == $syllables) and $counter <= 0) {
                            return $array2["word"];
                            $counter++;
                            $test = $array2["word"];
                        }
                    }
                    if ($test == null) {
                        foreach ($array as $array2) {
                            if ($counter <= 0) {
                                return $array2["word"];
                                $counter++;
                                $test = $array2["word"];
                            }
                        }
                        if ($test == null) {
                            $array = json_decode(file_get_contents("https://api.datamuse.com/words?rel_rhy={$word}&md=p&md=s"), true);
                            shuffle($array);
                            foreach ($array as $array2) {
                                if ((($array2["tags"][1] == $code || $array2["tags"][1] == $code || $array2["tags"][2] == $code) and $array2["numSyllables"] == $syllables) and $counter <= 0) {
                                    return $array2["word"];
                                    $counter++;
                                    $test = $array2["word"];
                                }
                            }
                            if ($test == null) {
                                foreach ($array as $array2) {
                                    if ($counter <= 0) {
                                        return $array2["word"];
                                        $counter++;
                                        $test = $array2["word"];
                                    }
                                }
                            } else {
                                return "SORRY";
                            }
                        }
                    }
            };
            function removeextra($pos) {
                    $pos = preg_replace('/^[A-Za-z0-9|\']+\//', '', $pos);
                    $pos = preg_replace("/\\\$/", 's', $pos);
                    return $pos;
            }
             ?>
            <?php
            $partsofspeech['prp'] = array("us ","you ","me ","it ","myself ","I ","them ","they ","me ","it ","they ","themselves ","you ","that ","we ","it ","he ",);
            $partsofspeech['prps'] = array("your ","my ","mine ","their ","our ",);
            $partsofspeech['jj'] = array( "full ","low ","wrong ","strong ","dark ","lucky ","unknown ","best ","bad ","bored ","private ","brave ","shy ","loud ","lout ","silent ","quiet ","white ","polite ","wild ","right ","entire ","impatient ","indivisible ","talentless ","full ","invincible ","little ","miniscule ","fistful ","long ","criminal ","secret ","decent ","clear ","popular ","deep ","own ","happy ","dusty ","silvery ","dietary ","exciting ","disappointed ","better ","good ","last ","blue ","true ","stuck ","bad ","lazy ","gentle ","every ","tiny ","sour ","lonely ","only ","wrong ","famed ","old ","sad ","open ","big ","grand ","sick ","blank ","more ","hard ","naked ","faraway ","phoney ","thin ","high ","nuclear ","much ","wet ",);
            $partsofspeech['jjs'] = array("greatest ","coldest ","most ","longest ","biggest ",);
            $partsofspeech['vbp'] = array("wish ","feel ","dont ","know ","become ","brush ","are ","guess ","stand ","do ","tell ","belong ","drink ","look ","am ","turn ","make ","have ","do ","like ","bow ","are ","am ","reveal ","don’t ","need ","ain’t ","want ","stand ","wish ","believe ","spend ","sit ","grow ","see ","pay ","go ","haven’t ","hold ","get ","come ","stop ","live ","know ","love ","hate ",);
            $partsofspeech['vbd'] = array("had ","were ","was ","used ","saw ","felt ","found ","dimed ","were ","turned ","was ","liked ","thought ","changed ","shook ","cried ","split ","spent ","met ","came ","said ","loved ","wanted ","had ","bought ","told ","adored ","took ","did ","got ",);
            $partsofspeech['vbz'] = array("is ","was ","dies ","looks ","does ","hides ","has ","seems ","makes ","hurts ","wants ","strikes ","falls ");
            $partsofspeech['vbg'] = array("walking ","leaving ","flying ","crying ","howling ","turning ","reaching ","taking ","digging ","ringing ","playing ","worrying ","waiting ","lending ","letting ","falling ","changing ","gonna ","trying ","getting ","saying ","shining ","calling ","coming ","zooming ","growing ","running ","drowning ","holding ","talking ","nodding ","skipping ",);
            $partsofspeech['dt'] = array( "some ","a ","no ","the ",);
            $partsofspeech['nn'] = array("control ","bug ","ear ","love ","shame ","name ","girl ","room ","coffee ","hope ","crash ","shore ","day ","night ","sun ","light ","power ","planet ","house ","bully ","coward ","mouse ","cloud ","bow ","time ","riot ","fire ","ounce ","amount ","pound ","underdog ","chalice ","law ","would ","plan ","should ","cliche ","obsessedGeneration ","schoolTeenDream ","hospital ","journal ","pair ","rock ","heart ","hole ","statepark ","didn’t ","voice ","pain ","photograph ","crime ","one ","biography ","scene ","party ","memory ","body ","something ","death ","xylophone ","baby ","worry ","week ","library ","trick ","fate ","navy ","sailormate ","moon ","lake ","way ","restriction ","lot ","conviction ","lightning ","somebody ","thing ","ooooh ","art ","sailor ","season ","bloom ","reason ","catch ","ticket ","fool ","lie ","nothing ","anyone ","snake ","diplomat ","afternoon ","traffic ","sky ","winter ","summer ","substance ","fog ","that ","maze ","bridge ","spine ","engineering ","back ","heavy ","weight ","skin ","drink ","sin ","song ","beginning ","year ","hopefear ","fear ","shape ","line ","sea ","bird ","plane ","taxi ","school ","wait ","lyin ","bed ","world ","dog ","price ","today ","medicinechest ","hair ","doubt ","boyscout ","drinkin ","roomnothin ","gloom ","tomb ","street ","oclocknews ","combhair ","shine ","hometown ","money ","loanwork ","bone ","float ","boom ","hell ","i’m ","rest ","right ","whining ","air ","breath ","answer ","there’ll ","audience ","inch ","war ","battle ","calling ","underworld ","cupboard ","beatlemania ","dust ","swing ","ring ","iceage ","meltdown ","wheat ","river ","ImitationZone ","brother ","shout ","yellowy ","error ","top ","dial ","smile ","fading ","bike ","flight ","astronaut ","space ","place ","face ",);
            $partsofspeech['nnp'] = array("AirJordans ","GoldenState ","GoldenGateBridge ","God ","London ","Lippincott ",);
            $partsofspeech['vb'] = array("embarrass ","wanna ","flustered ","hear ","dust ","marry ","take ","get ","forget ","belong ","do ","call ","look ","like ","sleep ","fret ","make ","hand ","write ","incite ","buy ","refrain ","chase ","read ","adhere ","listen ","ration ","be ","feel ","let ","climb ","happen ","steer ","include ","want ","shake ","commit ","leave ","worry ","jump ","stay ","go ","control ","love ","hold ","break ","were ","convince ","see ","need ","add ","know ","beg ","plead ","push ","drink ","draw ","grow ","turn ","move ","wish ","live ","have ","shout ","fall ","learn ","count ","fight ","fill ","accomplish ","beat ","stop ","try ","cause ","figure ","you’ll ","ask ","shut ","come ","quit ","give ","lie ","lay ","hang ","watch ",);
            $partsofspeech['vbn'] = array("got ","dressed ","connected ","done ","struck ","criticized ","grown ","challenged ","infused ","gone ","put ","set ","filled ","married ","split ","depressed ","tried ","seen ","known ","given ","declared ","bitten ","expected ","stuck ","lost ",);
            $partsofspeech['in'] = array("in ","like ","if ","as ","that ","on ","out ",);
            $partsofspeech['wrb'] = array("how ","when ",);
            $partsofspeech['rb'] = array("just ","easily ","not ","real ","never ","so ","too ","alone ","back ",);
            $partsofspeech['rp'] = array("off ","up ",);
            $partsofspeech['md'] = array("would ","can ","must ","shall ", "should ","will ", "would ","may ", "might ","can ", "could ",);
            $partsofspeech['cc'] = array("and ","but ",);
            $partsofspeech['nns'] = array("eyes ","hours ","plans ","hounds ","clocks ","calendars ","masters ","gods ","managers ","artists ","amateurs ","bandages ","rules ","rituals ","challengers ","imbeciles ","parents ","priests ","principals ","individuals ","residuals ","graveyards ","Leaves ","Lyrics ","ballads ","feet ","cops ","ribs ","words ","looks ","conquers ","cars ","jams ","lemons ","tumors ","suns ","people ","seconds ","things ","Seems ","folks ","shoes ","fingers ","fists ","signs ","towns ","boys ","girls ","Engines ","zombies ","ones ","strikes ","wheels ","rocks ",);
            $partsofspeech['wp'] = array("what ","who ",);
            $partsofspeech['cd'] = array("six ","nine ","ten ","one ");
            $partsofspeech['to'] = array("to ", "to ",);
            $partsofspeech['uh'] = array("well ", "ewwwww ", "ugg ", "uh-oh ");
        ?>
        <?php
            $pos_formula = trim($_POST['pos-formula']);
            if ($pos_formula == NULL) {
                $error = true;
                $pos_formula = trim("All/DT your/PRP$ friends/NNS are/VBP drunk/JJ and/CC wild/JJ <br/>/NN All/DT my/PRP$ friends/NNS are/VBP depressed/JJ <br/>/NN My/PRP$ daddy/NN is/VBZ a/DT fireman/NN <br/>/NN And/CC yours/PRP is/VBZ an/DT actress/NN ");
            }
            $original_pos_formula = $pos_formula;
            print "<h5>Lyrics Generated</h5>";
            $pos_formula = explode(" <br/>/NN ", $pos_formula);
            foreach ($pos_formula as &$line) {
                $line = strtolower($line);
                $line = explode(" ", trim($line));
                $len = count($line);
                $i = 0;
                $html .= "<p>";
                if ($lilcounter % 2 == 1) {
                    $lineend2 = end($line);
                    $lineend2 = removeextra($lineend2);
                    $almostlineend2 = prev($line);
                    $almostlineend2 = removeextra($almostlineend2);
                    foreach ($line as &$pos) {
                        $pos = removeextra($pos);
                        if ($pos == $lineend2 && $i == $len - 1) {
                            $html .= wordthatrhymes(trim($lineendword), trim($almostlineend2word), "$pos", 1);
                        } elseif ($pos == $almostlineend2 && $i == $len - 2) {
                            $poscall = $partsofspeech["$pos"];
                            $almostlineend2word = $poscall[array_rand($poscall,1)];
                            $html .= $almostlineend2word;
                        } else {
                            $poscall = $partsofspeech["$pos"];
                            $posword = $poscall[array_rand($poscall,1)];
                            if ($i == 0 && (strcmp($posword, "us") == 1 OR strcmp($posword, "myself") == 1 OR strcmp($posword, "me") == 1)) {
                                $posword = "I ";
                            } elseif ($i == 0 && (strcmp($posword, "mine") == 1)) {
                                $posword = "My ";
                            }
                            $html .= $posword;
                        }
                        $i++;
                    }
                } elseif ($lilcounter % 2 == 0) {
                    $lineend = end($line);
                    $lineend = removeextra($lineend);
                    foreach ($line as &$pos) {
                        $pos = removeextra($pos);
                        if ($pos == $lineend && $i == $len - 1) {
                            $poscall = $partsofspeech["$pos"];
                            $lineendword = $poscall[array_rand($poscall,1)];
                            $html .= $lineendword;
                        } else {
                            $poscall = $partsofspeech["$pos"];
                            $posword = $poscall[array_rand($poscall,1)];
                            if ($i == 0 && (strcmp($posword, "us") == 1 OR strcmp($posword, "myself") == 1 OR strcmp($posword, "me") == 1)) {
                                $posword = "I ";
                            } elseif ($i == 0 && (strcmp($posword, "mine") == 1)) {
                                $posword = "My ";
                            }
                            $html .= $posword;
                        }
                        $i++;
                    }
                }
                $lilcounter++;
                $html .= "</p>";
            }
            print $html;


        ?>
        <br/>
        <input class="button" type="submit" value="Try again" onClick="window.location.reload()">
    </article>
    <article class="article formula">
        <?php
            print "<h5>Formula used:</h5>";
            print "<small>";
            if ($error) {
                print "Your input failed, so we used Frankie Cosmos lyrics!<br/><br/>";
            }
            print_r($original_pos_formula);
            print "</small>";
        ?>
</article>
<script type="text/javascript" src="js/lexer.js"></script>
<script type="text/javascript" src="js/lexicon.js_"></script>
<script type="text/javascript" src="js/POSTagger.js"></script>
<script type="text/javascript">
// Note the \ at the end of the first line
document.getElementById("tag_lyrics").onclick = function fun() {
    var words = new Lexer().lex(document.getElementById("pre_input_text").value.trim().replace(/\n\r?/g, ' <br/> '));
    var taggedWords = new POSTagger().tag(words);
    var result = "";
    for (i in taggedWords) {
      var taggedWord = taggedWords[i];
      var word = taggedWord[0];
      var tag = taggedWord[1];
      // Note the use of document.writeln instead of print
      result += (word + "/" + tag + " ");
    }
    document.getElementById("input_text").value = result;
}
</script>
    </body>
</html>
