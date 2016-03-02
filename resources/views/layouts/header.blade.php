<div class="col s12">
    <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Blog</a></li>
          <li><a href="#!">Permis à points</a></li>
          <li class="divider"></li>
          <li><a href="#!">Reprise Automobile</a></li>
          <li><a href="#!">Extension de Garantie</a></li>
          <li><a href="#!">Bonus écologique</a></li>
          <li><a href="#!">Garantie pour les voitures d'occasion</a></li>
          <li><a href="#!">Conditions CG Neuf</a></li>
          <li><a href="#!">Conditions CG Occasion</a></li>
          <li><a href="#!">FAQ Bonus/Malus écologique</a></li>
        </ul>
        <nav style="margin-top:-25px;">
            <div class="nav-wrapper  blue-grey darken-3">
                <a href="{{ url('/') }}" class="brand-logo">Concept Automobile</a>
                <ul class="right hide-on-med-and-down">
                    <li class="active"><a href="collapsible.html">Accueil</a></li>
                    <li><a href="">Configurateur</a></li>
                    <li><a href="{{ URL::to('new-cars') }}">Véhicules Neufs & Utilitaires en Stock</a></li>
                    <li><a href="">Véhicules Occasions</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Informations Pratiques</a></li>
                </ul>
                <div class="progress" id="progress-main">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="col s12" style="margin-top:-25px;">
    <nav>
        <div class="nav-wrapper  blue-grey darken-3">
            <div class="col s12">
            <a href="#!" class="breadcrumb">Home</a>

            </div>
        </div>
    </nav>
</div>
<script type="text/javascript">
    setTimeout(() => {
        document.getElementById('progress-main').setAttribute('class', 'hide');
    }, 1000);

</script>