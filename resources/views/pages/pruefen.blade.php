@extends('layout')

@section('content')
<body class="htwg-lightblue">
  <nav class="htwg-darkblue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <!-- <li><a href="#">Kano</a></li> -->
      </ul>
          <img src="Kano\KANO-LOGO.jpg" width="80px" height="80px">
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div>
      <table id="fortschritt">
            <tr>
             <th>Anforderungen eingeben</th>
             <th>Anforderungen prüfen</th>
             <th>Anforderungen freigeben</th>
             <th>Ergebnis der Bewertung</th>
           </tr>
         </table>
         </div>
    <div class="container">

      <h3 class="header left htwg-darkblue-text">Anforderungsprüfung</h3>
<table id="tabelle">
      <tr>
       <th><b>funktionale Anforderung</b></th>
       <th><b>dysfunktionale Anforderung</b></th>
     </tr>
     <tr>
       <td>funktAnforderung1</td>
       <td>dysfunktAnforderung1</td>
     </tr>
     <tr>
       <td>funktAnforderung2</td>
       <td>dysfunktAnforderung2</td>
     </tr>
   </table>
          <br><br>
    <div class="buttons" >
    <div class="row center-right">
      <a href="eingabe" id="eingabe-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;"  >Zurück</a>
    </div>
    <div class="row center-right">
      <a href="freigeben" id="uebersicht-button" class="btn-large waves-effect right htwg-darkblue" style="height: 50px; width: 180px;">Zur Freigabe</a>
    </div>
  </div>
  <br><br>
  </div>
