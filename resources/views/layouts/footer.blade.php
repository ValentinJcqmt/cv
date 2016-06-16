<div class="container">
    <div class="row">
        <div class="col l6 s12">
            <h5 class="white-text">Informations</h5>
            <blockquote class="grey-text text-lighten-4">
                Les véhicules neufs ou occasions proposés par nos fournisseurs peuvent être soumis au bonus comme au malus gouvernemental.
                Les prix indiqués sur nos sites ne tiennent pas compte du bonus / malus, que vous devrez déduire ou rajouter.
                Vous trouverez à titre d'information sur chaque fiche de véhicule le taux de Co2 émis et à titre indicatif le Bonus / Malus généré.
                Neuf ou d'occasion, aucun véhicule n'est à récupérer dans nos locaux.
                N'hésitez pas à nous contacter pour toute précision ou demande de renseignement complémentaire.
            </blockquote>
        </div>
        <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Informations et conditions</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Informations légales</a></li>
                <li><a class="grey-text text-lighten-3" href="{{ asset('assets/cgv/cgv-neufs.pdf') }}" target="_blank">Conditions générales de ventes véhicules neufs</a></li>
                <li><a class="grey-text text-lighten-3" href="{{ asset('assets/cgv/cgv-occasions.pdf') }}" target="_blank">Conditions générales de ventes véhicules occasions</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
        <h5 class="center-align">Contacts : contact@eurocarline.fr & 04 86 68 80 51</h5>
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