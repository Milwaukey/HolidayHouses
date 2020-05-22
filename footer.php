<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php if($active != 'profile'){echo ' <script src="js/materialize.js"></script>';}?>
<?php if($active == 'profile'){echo ' <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>';}?>
<script src="js/script.js"></script>


<?= $linkToscript ?? '' ?>

</body>
</html>

