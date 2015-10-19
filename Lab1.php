<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            <?php
            $wantedgoods = "specs";

            Switch($wantedgoods){
                case "specs":
                    echo "You must be over 16";
                    break;
                case "mugs":
                    echo "You must be over 18";
                    break;
                case "sausage rolls":
                    echo "You must be over 21";
                    break;
            }

            ?>
        </p>
    </body>
</html>
