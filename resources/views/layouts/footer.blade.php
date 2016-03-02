<div class="container">
    <div class="row">
        <div class="col l6 s12">
            <h5 class="white-text">Contenu du footer</h5>
            <p class="grey-text text-lighten-4">contact@conceptautomobile.fr</p>
        </div>
        <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Rubriques les plus populaires</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
        <h5 class="center-align">Concept Automobile @ Voleurs and Co</h5>
    </div>
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                margin:10,
                loop:true,
                items:4
            });

            $('ul.tabs').tabs();

            $('.collapsible').collapsible({
              accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });
    </script>