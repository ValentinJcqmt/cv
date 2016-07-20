<div class="row">
  <!--BANNIERE-->
  <div class="col s12 banderolle" >
    <?php /*include "login.php"; */?>
    <style>
      .text-white{
        color:white;
      }
      .space{
        padding-top: 3px;
      }
      .text-white:hover{
        color:orange;
      }
    </style>
        <div class="col s9">
          <a class="logo-home" href="http://conceptautomobile.fr">
            <img src="{{ asset('assets/logo_conceptauto.png') }}" alt="Accueil Logo" />
          </a>
        </div>
        <div class="col s3 coordonnees">
          <br/>
              <p class ="text-white">
              Tel : 09 70 71 50 00<br />
              </p>
              <script type="text/javascript">
                var a, s, n;

                function Crypt(s) {
                  r='';
                  for(i=0;i<s.length;i++){
                    n=s.charCodeAt(i); if (n>=8364) {n = 128;} r += String.fromCharCode( n - 3 );
                  }
                  return r;
                }

                a ="pdlowr=";
                m='&#64;';
                d=unescape(m);
                var nom = "contact";
                var domaine = "conceptautomobile.fr";
                var aro = nom + d + domaine;
                document.write('<p><a class ="text-white" href=' + Crypt(a) + aro + ' >');
                document.write(aro + '</a></p><br/>');
              </script>

              <!--Contact-->
              <p>
                <a  href="contact.html" class ="text-white space">
                  <span>@</span> Contact
                </a>
              </p>
        </div>
  </div>
  <!-- /Banniere -->
</div>

<div class="row">
  <!--MENU-->
  <div class="col s12 menu-horizontal">
    <!---fonction Onmouseover sur le menu--> <!-- A remplacer par a:hover -->

    <!-- Menu -->
    <nav>
      <div class="nav-wrapper">
        <ul>
          <li>
            <a href="{{ url('/') }}" class="text-center text-white menu-2 waves-effect waves-light">
                Accueil
            </a>
          </li><li>
            <a  href="http://configurateur.conceptautomobile.fr" class="text-center text-white menu-2 waves-effect waves-light">
                Configurateur véhicules neufs sur commande
            </a>
          </li><li>
            <a href="{{ url('voitures-neuves') }}" class="text-center text-white menu-2 waves-effect waves-light">
                Véhicules neufs & utilitaires en stock
            </a>
          </li><li>
            <a  href="{{ url('voitures-occasions') }}" class="text-center text-white menu-2 waves-effect waves-light">
                Véhicules d'occasion en stock
            </a>
          </li><li>
            <a class="dropdown-button menu-2 text-center text-white waves-effect waves-light" href="#" data-activates="dropdown1">
                Informations pratiques
            </a>
            <ul id="dropdown1" class="dropdown-content">
              <li><a class="waves-effect waves-effect" href="http://configurateur.conceptautomobile.fr/blog/">Blog</a></li>

              <li><a class="waves-effect waves-effect" href="http://www.recuperer-mes-points.com" target="_blank">Permis à points</a></li>

              <li><a class="waves-effect waves-effect" href="http://configurateur.conceptautomobile.fr/reprise.html">Reprise automobile</a></li>

              <li><a class="waves-effect waves-effect" href="http://configurateur.conceptautomobile.fr/extensions-garantie.html">Extension de Garantie</a></li>

              <li><a class="waves-effect waves-effect" href="bonus-malus-ecologique.html">Bonus Ecologique</a></li>

              <li><a class="waves-effect waves-effect" href="conditions-voitures-occasions.php">Garantie pour les voitures d'occasion</a></li>

              <li><a class="waves-effect waves-effect" href="Gestion_comptes_clients/cgv-neufs.pdf" target="_blank">Conditions GV Neuf</a></li>

              <li><a class="waves-effect waves-effect" href="Gestion_comptes_clients/cgv-occasions.pdf" target="_blank">Conditions GV Occasion</a></li>

              <li><a class="waves-effect waves-effect" href="Questions-reponses_bonus-malus.pdf" target="_blank">FAQ Bonus/malus &eacute;cologique</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /Menu -->

  </div>
  <!--/MENU-->
</div>


<script type="text/javascript">
    setTimeout(function() {
        document.getElementById('progress-main').setAttribute('class', 'hide');
    }, 1000);

</script>
