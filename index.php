<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php include('header.html');?>
    <style>
        
*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}

body{
    height:100vh;
    width:100vw;
    background-color:lavender;
}

p{
    color:white;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size:15px;
    max-width:700px;
    padding:10px 5px;
    
}
h2{
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    color:white;
}
ol{
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}
#marioImg{float:left;width:150px;height:150px;border-radius:100%;margin:5px 10px;}
#mainHome{background-color:grey;margin:200px 40px;padding:10px;border-radius:20px;}
@media(max-width:370px){
    #marioImg{
        width:100px;
        height:100px;
    }
}

        
    </style>
    <div id="mainHome">
<h2>Hello world ,</h2>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Numele meu este Mario (in caz ca nu v-ati dat seama din titlul site-ului).Am multe idei si vreau sa le scuip afara din mintea mea.
Sper ca o sa va place sa va delectati cu ceea ce voi scrie pe acest blog. Nu uitati ca avem si magazin , iar articolele sunt foarte variate.
Deci indiferent de ce gusturi culturale ai, aici este loc si pentru tine.
</p>
<img src="mario.jpg" id="marioImg">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mancarea mea preferata este pizza.Daca vrei sa imi cumperi una gasesti mai multe detalii in sectiunea de store.
Poti cumpara si alte lucruri , adica de toate ,doar trage o privire si convinge-te ... daca nu ma crezi.
Una din caracteristicile interesante ale noastre ca oameni consta in faptul ca ne place sa mirosim lucruri, de asta industria deodorantelor si a parfumurilor are un succes atat de vast.
Ori asta ,ori nu ne place sa ne spalam si ne simtim obligati ca macar sa ne ascundem putoarea daca nu altceva...
Hmmm ... picioare cu aroma de cascaval. Ori... o idee : cascaval cu aroma de picioare :) 
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mi se pare demn de remarcat faptul ca suntem tristi parca daca ne pierdem rutia ... Insa daca rutina noastra e prea stricta suntem tristi din nou.
Consider ca fiecare om are un echilibru propriu si lucrul asta ar trebui sa conteze in domeniul locurilor de munca si in corporatii.
Uneori pare ca pana si suferinta e subiectiva, dar daca suna interesant te invit sa citesti articolul corespunzator.Daca nu l-am scris inca sunt doua optiuni :
<br>
<br>
<ol style="margin-left:80px;list-style-type:upper-alpha">
<li style="color:tomato">Am murit.</li>
<li style="color:lightblue">Lucrez la articol.</li>
</ol>
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oricum , sper ca voi reusi sa iti ofer ceva valoros prin acest blog. Informatii pe care poate nu le stiai , idei creative ori inspiratie sau pur si simplu entertainment.
    &#x270C;
</p>

</div>
<?php include("footer.html");?>
</body>
</html>
