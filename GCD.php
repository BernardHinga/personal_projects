<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="GCD.css">
    <body>
        <div id="form">
            <form action="#calc" method="GET">
                First <input type="number" name="first" placeholder="first input">
                Second <input type="number" name="second" placeholder="second input"><br/>
                <button type="submit" name="submit">Calculate</button>
            </form>
        </div>

            <div id="calc">
                <?php
                    /*--Eucledean algorithm--*/

                    function getGCD($x , $y) {

                        if ($x==0 || $y==0) {
                                return 0;
                            }
                            if ($x==$y) {
                                return $x;
                            }
                            if ($x > $y) {
                                return getGCD($x-$y , $y);
                            }
                            else {
                                return getGCD($x , $y-$x);
                            }

                            #----can also use------

                            /*if ($x==0) {
                                return $y;
                            }
                            return getGCD($y%$x, $x);*/
                        }

                    $a = $_GET['first'];
                    $b = $_GET['second'];

                    $GCD = getGCD($a, $b);

                    echo "The GCD of $a and $b is :", $GCD;

                ?>
                
            </div>

    </body>

</html>