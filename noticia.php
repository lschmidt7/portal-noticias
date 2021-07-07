<style>
    .noticia {
        background-color: #1E90FF; 
        margin-block: 10px;
        padding: 1em;
        border-radius: 0.5em;
    }
    .noticia h1:hover {
        color: 	#F4A460;
        cursor: pointer;
    }

    .noticia:hover{
        background-color: #48D1CC;
    }
</style>

<div class="noticia">
    <div>
        <h1>
        <?php
            echo $linha['titulo'];
        ?>
        </h1>
    </div>
    <div>
        <p>
        <?php
            echo $linha['conteudo'];
        ?>
        </p>
    </div>
    <div>
        <p>
        <?php
            $id_noticia = $linha['id'];
            echo "<a href='delete_noticia.php?id=$id_noticia'>Excluir</a>";
        ?>
        </p>
    </div>
</div>