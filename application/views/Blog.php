<html>
<body>
    <h1>
        Nueva entrada de blog
    </h1>
    <?php
        echo form_open('blog_controller/blog');
        echo form_label('Titulo', 'title');
        echo form_input('title');echo '<br>';
        echo form_label('Contenido', 'content');
        echo form_input('content');echo '<br>';
        echo form_submit('botonSubmit', 'Enviar');
        echo form_close();

        if(isset($query)) {
            echo "El título del primer blog es: ".$query[0]->title; echo "<br>";
            echo "Y su contenido es: ".$query[0]->content;
        }
    ?>
</body>
</html>