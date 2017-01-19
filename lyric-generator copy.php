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
    <body class="home">
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
<!-- [/( 1/CD ]/)     with/IN $ down/IN 'd/MD  all/DT and/CC  away/RB the/DT But/CC then/RB  the/DT and/CC  $ 's/POS And/CC  out/IN the/DT  n't/RB no/DT Now/RB  a/DT  a/DT  a/DT as/IN a/DT Then/RB   over/IN the/DT And/CC then/RB '  with/IN a/DT And/CC '  n't/RB   down/RP 'll/MD  a/DT ,/,  all/DT around/IN When/WRB '  out/RP ,/, '  with/IN the/DT  n't/RB   an/DT For/IN ,/, the/DT  the/DT [/(  ]/) only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN When/WRB '  out/IN ,/, when/WRB '  out/IN ,/, when/WRB '  out/IN [/( 2/CD ]/)  n't/RB  after/IN or/CC  down/IN not/RB  ,/, ,/, nor/CC Cause/IN all/DT the/DT  ,/,  Unembarrassed/IN ,/, in/IN only/RB And/CC  n't/RB  or/CC   ' an/DT And/CC $  When/WRB $  ,/,   n't/RB   or/CC or/CC Inconsiderate/IN of/IN When/WRB  out/RB $ by/IN the/DT As/IN as/IN there/EX ' a/DT ,/, 'll/MD  a/DT [/(  ]/) only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN When/WRB '  out/IN ,/, when/WRB '  out/IN ,/, when/WRB '  out/IN When/WRB '  out/IN ,/, when/WRB '  out/IN When/WRB '  out/IN ,/, when/WRB '  out/IN [/(  ]/)  up/RP  four/CD and/CC could/MD n't/RB   up/RP  five/CD ,/,  n't/RB real/RB yet/RB  up/RP  six/CD n't/RB  Seven/CD  a/DT Eight/CD   Nine/CD  ,/, but/CC [/( Outro/LS ]/) really/RB  when/WRB  out/RP only/RB really/RB  when/WRB '  out/IN  ,/,  like/IN  like/IN  out/RB  ,/, like/IN ,/, like/IN ,/, like/IN  out/RP only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN only/RB  when/WRB '  out/IN When/WRB '  out/IN ,/, when/WRB '  out/IN ,/, when/WRB '  out/IN Whatever/WDT ' inside/IN ,/,   out/RP That/DT  $ and/CC ' now/RB 

 (/( never/RB  would/MD   but…/.

 No/RB one/CD ever/RB    at/IN  of/IN  In/IN $ death-No/RB one/CD ever/RB    at/IN High/RB  in/IN the/DT behind/IN a/DT and/CC a/DT of/IN  S of/IN    $ I’m/.

      back/RB $   a/DT for/IN six/CD (/( at/IN the/DT ,/, at/IN the/DT )/)     in/IN $ $  $ And/CC when/WRB the/DT  down/IN   home/RB   home/RB and/CC  now/RB  in/IN one/CD and/CC  even/RB  can/MD n't/RB   a/DT      for/IN the/DT because/IN When/WRB  the/DT  the/DT early/RB What/WDT   behind/IN ?/.

     Just/RB a/DT Another/DT  no/DT of/IN  S     $ for/IN     in/IN $ $  $ And/CC when/WRB the/DT  down/IN   home/RB   home/RB Don’t/IN  I’m/.

      for/IN two/CD So/RB   Don’t/IN I’m/.

      for/IN two/CD So/RB   
 a/DT in/IN a/DT  for/IN some/DT   at/IN  by/IN a/DT of/IN  $  by/IN the/DT on/IN a/DT  $  ,/,    with/IN $   with/IN a/DT of/IN     by/IN  for/IN Like/IN Oh/UH ,/, the/DT that/IN    With/IN the/DT that/IN  (/(  ,/,  )/)    But/CC  ,/, could/MD n't/RB     But/CC  ,/, could/MD n't/RB  'll/MD  for/IN  out/RP $  for/IN   $ Why/WRB  for/IN ?/.

     ' fully/RB ,/, but/CC ' on/IN tenterhooks/DT  with/IN the/DT ,/, on/IN tenterhooks/DT  with/IN the/DT ,/, the/DT  ,/, the/DT     But/CC  ,/, could/MD n't/RB     But/CC  ,/, could/MD n't/RB  S      R for/IN and/CC  by/IN a/DT of/IN  ,/, $    But/CC  ,/, could/MD n't/RB     But/CC  ,/, could/MD n't/RB  

If/IN  a/DT would/MD  in/IN     soon/RB No/RB    that/IN  a/DT  $ and/CC so/RB at/IN  that/IN  that/DT all/DT ?/.

     Oh/UH ,/,  a/DT 'cause/IN  n't/RB  up/RP    a/DT On/IN the/DT  $ and/CC on/IN the/DT back/RB ?/.

      $ the/DT  ?/.

      once/RB this/DT  If/IN   n't/RB  'll/MD  'Cause/IN ' with/IN and/CC ' on/IN  quite/RB that/IN could/MD never/RB Or/CC  a/DT ?/.

         a/DT ?/.

     Oh/UH ,/, can/MD  and/CC can/MD   $ the/DT  ?/.

      once/RB this/DT  and/CC if/IN   n't/RB  'll/MD  'Cause/IN ' with/IN and/CC ' on/IN  $ the/DT  ?/.

      once/RB this/DT  If/IN   n't/RB  'll/MD  'Cause/IN ' with/IN and/CC ' on/IN 'Cause/IN ' with/IN and/CC ' on/IN ' with/IN and/CC ' on/IN ' with/IN and/CC ' on/IN 
  the/DT in/IN  in/IN for/IN  n't/RB  ,/,  not/RB ok/UH The/DT   The/DT  like/IN  with/IN as/IN a/DT In/IN the/DT   The/DT  that/WDT ever/RB   the/DT that/IN  The/DT  the/DT And/CC  all/DT  Ca/MD n't/RB  a/DT inside/IN the/DT There/EX  a/DT  and/CC The/DT  of/IN Whose/WP$  with/IN $ as/IN a/DT In/IN the/DT   The/DT  that/WDT ever/RB   the/DT that/IN   still/RB this/DT  still/RB this/DT  $  $  $ About/IN the/DT  out/RB loud/RB So/RB the/DT can/MD  ,/,  '  still/RB this/DT  still/RB this/DT  $ $ ' not/RB the/DT only/RB one/CD ' not/RB the/DT only/RB one/CD ' not/RB the/DT only/RB one/CD ' not/RB the/DT one/CD ,/,  ' $  will/MD  a/DT Between/IN the/DT of/IN and/CC ' not/RB a/DT ,/, ' not/RB a/DT  a/DT  the/DT  will/MD not/RB   again/RB Four/CD  the/DT  Four/CD  the/DT  Four/CD  the/DT  Four/CD  the/DT  Four/CD  the/DT   When/WRB ' '/POS in/IN $ at/IN  n't/RB   up/RP ever/RB    out/RP right/RB  n't/RB   up/RP How/WRB   in/IN a/DT of/IN that/WDT ' always/RB    that/IN could/MD  a/DT When/WRB  the/DT that/IN   n't/RB   up/RP  n't/RB ever/RB    that/DT  n't/RB   up/RP that/IN  into/IN that/WDT never/RB  The/DT   for/IN  ../.

     ./.

     '  a/DT in/IN $ T../. n't/RB   up/RP up/IN the/DT  n't/RB   up/RP  n't/RB     out/RP  n't/RB  $   out/RP  n't/RB   with/IN  n't/RB   a/DT  n't/RB        n't/RB   the/DT   n't/RB   up/RP Well/UH when/IN  $   n't/RB   up/RP all/DT  out/RP and/CC all/DT  n't/RB   up/RP 'd/MD rather/RB  here/RB in/IN $ '/POS out/IN there/RB but/CC and/CC  n't/RB   in/IN a/DT on/IN When/WRB  the/DT 5/CD  n't/RB   up/RP and/CC $  n't/RB   up/RP  around/IN in/IN $  n't/RB  no/DT down/IN  n't/RB   a/DT  the/DT  n't/RB  on/IN a/DT in/IN ,/,  then/RB How/WRB the/DT   here/RB so/RB soon/RB  n't/RB   up/RP  so/RB of/IN (/(  in/IN the/DT )/)  ,/,  If/IN  in/IN two/CD would/MD just/RB  $ So/RB could/MD  up/IN the/DT of/IN  no/DT    enough/RB    enough/RB of/IN this/DT yet/RB But/CC  ,/,  ,/,  ,/,  Well/UH  $ ,/,  again/RB No/DT    just/RB    some/DT in/IN But/CC  $ ,/,  $ ,/,   $ ,/,  $ ,/,  I’ve/RB for/IN a/DT not/RB   out/IN of/IN  a/DT   out/RP    So/RB    why/WRB ?/.

      and/CC there/EX will/MD  no/DT Then/RB   for/IN how/WRB ?/.

     and/CC there/EX will/MD  no/DT Then/RB    can/MD  ?/.

      and/CC  no/DT And/CC eventually/RB will/MD  up/RP  no/DT    enough/RB    enough/RB of/IN this/DT yet/RB But/CC  ,/,  ,/,  ,/,  Well/UH  $ ,/,  again/RB No/DT    just/RB    some/DT in/IN But/CC  $ ,/,  $ ,/,   $ ,/,  $ ,/,   From/IN the/DT  “stay/IN the/DT down”/IN  From/IN the/DT  “stay/IN the/DT down”/IN  From/IN   “stay/IN the/DTdown”/IN I’ve/RB  a/DT   ' every/DT     too/RB much/RB of/IN this/DT ,/, yes/UH And/CC  ,/,  ,/,  ,/,  And/CC will/MD never/RB  the/DT That/IN I’ve/RB  in/IN $ just/RB    So/RB 'll/MD  $ ,/,  $ ,/,   $ ,/,  $ ,/,  $ ,/,  $  $ ,/,  $ ,/,  $ 

    the/DT Now/RB  ,/, and/CC  down/RP   the/DT  out/RB of/IN the/DT ,/, and/CC   ,/, now/RB  n't/RB    the/DT   ,/, see/UH  n't/RB  no/DT 'Cept/IN for/IN the/DT of/IN that/DT The/DT   ,/, the/DT 's/POS  in/IN ,/, the/DT     ,/, but/CC  no/DT 'Cause/IN    ,/, and/CC  by/IN the/DT    the/DT  ,/, ,/, can/MD  alone/RB    the/DT of/IN   out/RP ,/, and/CC  another/DT   ,/, and/CC  n't/RB  But/CC while/IN   ,/,   out/IN   ,/, see/UH  n't/RB no/DT Except/IN for/IN that/DT one/CD with/IN the/DT The/DT   ,/, the/DT 's/POS  in/IN   ,/, the/DT   A/DT ,/, but/CC  no/DT 'Cause/IN    ,/, and/CC  by/IN the/DT Now/RB  this/DT   ,/, yes/UH ,/,  there/RB ,/, too/RB An/DT '/''   ?/.

     Well/UH ,/, some/DT of/IN  !/.

       at/IN the/DT of/IN the/DT After/IN all/DT this/DT ,/, wo/MD n't/RB  a/DT ?/.

       never/RB  so/RB alike/RB [/( ]/) alike/RB alike/RB alike/RB 

  ,/,  from/IN  ,/, ooh/UH  ,/,  with/IN the/DT  n't/RB ,/, ooh/UH  ,/,   the/DT   ,/,  with/IN the/DT wo/MD n't/RB When/IN will/MD  on/IN $ wo/MD n't/RB  inside/IN will/MD    ,/,  the/DT  ,/, ooh/UH ,/,  the/DT  n't/RB ,/, ooh/UH  up/RP on/IN the/DT  ,/, ooh/UH  out/RP for/IN the/DT wo/MD n't/RB And/CC when/WRB  'll/MD  on/IN $ wo/MD n't/RB  inside/IN will/MD   And/CC when/WRB the/DT  off/RP 'll/MD  an/DT will/MD  in/IN will/MD   When/WRB  on/IN an/DT ever/RB  in/IN The/DT 's/POS  all/DT And/CC can/MD n't/RB ever/RB  $ can/MD n't/RB  $ And/CC when/WRB  'll/MD  on/IN $ wo/MD n't/RB  inside/IN will/MD   And/CC when/WRB the/DT  off/RP 'll/MD  an/DT will/MD  in/IN 'll/MD  on/IN   -->

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

            $newfiles = [ "Lyric Set 1", "Lyric Set 2", "Lyric Set 3", "Lyric Set 4", "Lyric Set 5"];
        ?>
        <?php
        // Take from the ones who love you
            // foreach ($newfiles as &$value) {
            //     $cnt = 1;
            //     $html = "<div class='lyrics lyrics-{$cnt}'>";
            //     $html .= "<h5>{$value}</h5>";
            //     $lineend = trim($prp[array_rand($prp,1)]);
            //     $html .= "<p>" . $vbp[array_rand($vbp,1)] . $vbp[array_rand($vbp,1)] . $in[array_rand($in,1)] . $dt[array_rand($dt,1)] . $nns[array_rand($nns,1)] . $wp[array_rand($wp,1)] . $vb[array_rand($vb,1)]  . $lineend . "</p>"; 
            //     $almostlineend2 = $wp[array_rand($wp,1)];
            //     $lineend2 = $almostlineend2 . wordthatrhymes($lineend, trim($almostlineend2), "vb", 1);
            //     $html .= "<p>" . $vbp[array_rand($vbp,1)] . $vbp[array_rand($vbp,1)] . $in[array_rand($in,1)] . $dt[array_rand($dt,1)] . $nns[array_rand($nns,1)] . $wp[array_rand($wp,1)] . $lineend2 . "</p>"; 
            //     $cnt++;
            //     print $html;
            // }
        // Titus Andronicus
            // foreach ($newfiles as &$value) {
            //     $cnt = 1;
            //     $html = "<div class='lyrics lyrics-{$cnt}'>";
            //     $html .= "<h5>{$value}</h5>";
            //     $lineend = trim($in[array_rand($in,1)]);
            //     $html .= "<p>" . $prp[array_rand($prp,1)] . $vbd[array_rand($vbd,1)] . $to . $vb[array_rand($vb,1)] . $vbg[array_rand($vbg,1)] . $in[array_rand($in,1)] . $prp[array_rand($prp,1)] . $nns[array_rand($nns,1)] . $lineend . "</p>"; 
            //     $almostlineend2 = $nn[array_rand($nn,1)];
            //     $lineend2 = $almostlineend2 . wordthatrhymes($lineend, trim($almostlineend2), "nns", 1);
            //     $html .= "<p>" . $prp[array_rand($prp,1)] . $md[array_rand($md,1)] . $vb[array_rand($vb,1)] . $dt[array_rand($dt,1)] . $nn[array_rand($nn,1)] . $cc[array_rand($cc,1)] . $vb[array_rand($vb,1)] . $rb[array_rand($rb,1)] . $dt[array_rand($dt,1)] . $lineend2 . "</p>"; 
            //     $cnt++;
            //     print $html;
            // } 
            // print_r($_POST);
            $pos_formula = trim($_POST['pos-formula']);
            print "<h5>Formula used:</h5>";
            print "<small>";
            print_r($pos_formula);
            print "</small>";
            if ($pos_formula == NULL) {
                print "<small>Your input failed, here's the formula for a Frankie Cosmos' I Floated In</small>";
                $pos_formula = trim("All/DT your/PRP$ friends/NNS are/VBP drunk/JJ and/CC wild/JJ <br/>/NN All/DT my/PRP$ friends/NNS are/VBP depressed/JJ <br/>/NN My/PRP$ daddy/NN is/VBZ a/DT fireman/NN <br/>/NN And/CC yours/PRP is/VBZ an/DT actress/NN ");
            }
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
                // print $len;
                $lilcounter++;
                $html .= "</p>";
                // $lineend = trim($in[array_rand($in,1)]);
                //  . $prp[array_rand($prp,1)] . $vbd[array_rand($vbd,1)] . $to . $vb[array_rand($vb,1)] . $vbg[array_rand($vbg,1)] . $in[array_rand($in,1)] . $prp[array_rand($prp,1)] . $nns[array_rand($nns,1)] . $lineend . "</p>"; 
                // $almostlineend2 = $nn[array_rand($nn,1)];
                // $lineend2 = $almostlineend2 . wordthatrhymes($lineend, trim($almostlineend2), "nns", 1);
                // $html .= "<p>" . $prp[array_rand($prp,1)] . $md[array_rand($md,1)] . $vb[array_rand($vb,1)] . $dt[array_rand($dt,1)] . $nn[array_rand($nn,1)] . $cc[array_rand($cc,1)] . $vb[array_rand($vb,1)] . $rb[array_rand($rb,1)] . $dt[array_rand($dt,1)] . $lineend2 . "</p>"; 
            }
            print $html;

        ?>
        <?php
            // foreach ($newfiles as &$value) {
            //     $rand_adjectives = array_rand($adjectives, 4);
            //     $rand_description = array_rand($description, 4);
            //     $rand_nouns = array_rand($nouns, 4);
            //     $rand_verbs = array_rand($verbs, 3);
            //     $rand_prepositions = array_rand($prepositions, 3);
            //     $rand_articles = array_rand($articles, 4);
            //     $rand_sentencestart = array_rand($sentencestart, 2);
            //     $cnt = 1;
            //     $html = "<div class='lyrics lyrics-{$cnt}'>";
            //     $html .= "<h5>{$value}</h5>";
            //     $lineend = trim($nouns[$rand_nouns[1]]);
            //     $html .= "<p>" . ucwords($articles[$rand_articles[0]]) . $adjectives[$rand_adjectives[0]] . $description[$rand_description[0]] . $nouns[$rand_nouns[0]] . $verbs[$rand_verbs[0]] . $prepositions[$rand_prepositions[0]] . $articles[$rand_articles[1]] . $description[$rand_description[1]] . $lineend . "</p>"; 
            //     $lineend2 = $adjectives[$rand_adjectives[3]] . wordthatrhymes($lineend, trim($adjectives[$rand_adjectives[3]]), "n", 1);
            //     $html .= "<p>" . $sentencestart[$rand_sentencestart[0]] . $articles[$rand_articles[2]] . $adjectives[$rand_adjectives[2]] . $nouns[$rand_nouns[2]] . $verbs[$rand_verbs[2]] . $prepositions[$rand_prepositions[1]] . $articles[$rand_articles[3]] . $lineend2 . "</p>";
                
            //     $cnt++;
            //     print $html;
            // } 
        ?>
        <br/>
        <input class="button" type="submit" value="Try again" onClick="window.location.reload()">
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
