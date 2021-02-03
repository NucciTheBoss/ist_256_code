<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 3-8. Alternative multiline echo statement</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $author = "Brain W. Kernighan";

        echo <<<_END
            Debugging is twice as hard as writing code in the first place.
            Therefore, if your write the code as cleverly as possible, you are,
            by definition, not smart enough to debug it.
            
            - $author.
        _END;

        /*
        * This is multiline echo statement resembles a Here Document
        * in the bash shell. https://bash.cyberciti.biz/guide/Here_documents
        */
    ?>
</body>
</html>