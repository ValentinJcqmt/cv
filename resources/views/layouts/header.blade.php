<div class="col s12">
    <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="http://configurateur.conceptautomobile.fr/blog/">Blog</a></li>
          <li><a href="http://www.stage-permis-a-points.biz/">Permis à points</a></li>
          <li><a href="http://configurateur.conceptautomobile.fr/reprise.html">Reprise Automobile</a></li>
          <li><a href="http://configurateur.conceptautomobile.fr/extensions-garantie.html">Extension de Garantie</a></li>
          <li><a href="http://configurateur.conceptautomobile.fr/bonus-malus-ecologique.html">Bonus écologique</a></li>
          <li><a href="http://configurateur.conceptautomobile.fr/conditions-voitures-occasions.php">Garantie pour les voitures d'occasion</a></li>
          <li><a href="{{ asset('assets/cgv/cgv-neufs.pdf') }}" target="_blank">Conditions CG Neuf</a></li>
          <li><a href="{{ asset('assets/cgv/cgv-occasions.pdf') }}" target="_blank">Conditions CG Occasion</a></li>
          <li><a href="{{ asset('assets/faq/Questions-reponses_bonus-malus.pdf') }}" target="_blank">FAQ Bonus/Malus écologique</a></li>
        </ul>
        <nav style="margin-top:-25px;">
            <div class="nav-wrapper  blue-grey darken-3">
                <a href="{{ url('/') }}" class="brand-logo">Concept Automobile</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="http://configurateur.conceptautomobile.fr/configuration-voiture-neuve.html" target="_blank">Configurateur</a></li>
                    <li><a href="{{ URL::to('voitures-neuves') }}">Véhicules Neufs & Utilitaires en Stock</a></li>
                    <li><a href="">Véhicules Occasions</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1" alignment="bottom">Informations Pratiques</a></li>
                </ul>
                <div class="progress" id="progress-main">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </nav>
    </div>
</div>

<script type="text/javascript">

    setTimeout(function() {
        document.getElementById('progress-main').setAttribute('class', 'hide');
    }, 1000);

</script>
