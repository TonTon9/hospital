<?php get_header();


    $id = get_the_ID();
    if ($id==69){        
        include("textPage.php");
    }
    elseif ($id==9){        
        include("Contacts.php");
    }
    else{
        include("main.php");
    }    
?>

<?php get_footer(); ?>