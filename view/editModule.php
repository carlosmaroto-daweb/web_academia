<?php
    if ($dataToView) {
        $name         = $dataToView->getName();
        $header_image = $dataToView->getHeaderImage();
        $preview      = $dataToView->getPreview();
        $content      = $dataToView->getContent();
    }
    echo "<div class='container pt70'>";
        echo "<h4 class='text-center mt100 mb10'>Creación del Módulo</h4>";
        echo "<form id='module-create-form'>";
            echo "Nombre: <span class='color-pasific'>(*)</span>";
            echo "<br>";
            echo "<input id='module-create-name' type='text' name='email' value='{$name}'>";
            echo "<br>";
            echo "<br>";
            echo "Foto de cabecera: <span class='color-pasific'>(*)</span>";
            echo "<br>";
            echo "<input type='file' id='header_image' name='header_image' accept='.jpg, .jpeg, .png' />";
            echo "<img id='header_image_preview' src='{$header_image}'>";
            echo "<br>";
            echo "<br>";
            echo "Contenido previsualización: <span class='color-pasific'>(*)</span>";
            echo "<br>";
            echo "<div id='preview'>{$preview}</div>";
            echo "<br>";
            echo "<br>";
            echo "Contenido: <span class='color-pasific'>(*)</span>";
            echo "<br>";
            echo "<div id='content'>{$content}</div>";
        echo "</form>";
        echo "<div class='container mb100'>";
            echo "<div class='row'>";
                echo "<div class='col-md-12 text-center'>";
                    echo "<h3 class='color-light text-capitalize font-open-sans'>";
                        echo "<a  href='index.php?controller=secretaryController&action=secretary' class='button-3d button-md button-rounded button-danger'>Cancelar</a>";
                        echo "<a id='create-module' class='button-3d button-md button-rounded button-success'>Guardar</a>";
                    echo "</h3>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>