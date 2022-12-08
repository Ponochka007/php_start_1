<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php $a_01 = !0 ?>
    <?php $a_02 = 0 || 0 ?>
    <?php $a_03 = 0 && 0 ?>
    <?php $a_04 = 0 xor 0 ?>
    <?php $a_05 = 0 || 1 ?>
    <?php $a_06 = 0 && 1 ?>
    <?php $a_07 = 0 xor 1 ?>
    <?php $a_08 = !1 ?>
    <?php $a_09 = 1 || 0 ?>
    <?php $a_10 = 1 && 0 ?>
    <?php $a_11 = 1 xor 0 ?>
    <?php $a_12 = 1 || 1 ?>
    <?php $a_13 = 1 && 1 ?>
    <?php $a_14 = 1 xor 1 ?>

    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td><?php echo $a_01 ?></td>
            <td><?php echo $a_02 ?></td>
            <td><?php echo $a_03 ?></td>
            <td><?php echo $a_04 ?></td>

        </tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo $a_01 ?></td>
            <td><?php echo $a_05 ?></td>
            <td><?php echo $a_06 ?></td>
            <td><?php echo $a_07 ?></td>
        </tr>

        </tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo $a_08 ?></td>
            <td><?php echo $a_09 ?></td>
            <td><?php echo $a_10 ?></td>
            <td><?php echo $a_11 ?></td>
        </tr>

        </tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo $a_08 ?></td>
            <td><?php echo $a_12 ?></td>
            <td><?php echo $a_13 ?></td>
            <td><?php echo $a_14 ?></td>
        </tr>

    </table>

    <h1>Гибкое сравнение в PHP</h1>

    <?php $a = true == true ?>
    <?php $b = true == false ?>
    <?php $c = true == 1 ?>
    <?php $d = true == 0 ?>
    <?php $e = true == -1 ?>
    <?php $f = true == '1' ?>
    <?php $g = true == null ?>
    <?php $h = true == 'php' ?>

    <?php $aa = false == true ?>
    <?php $bb = false == false ?>
    <?php $cc = false == 1 ?>
    <?php $dd = false == 0 ?>
    <?php $ee = false == -1 ?>
    <?php $ff = false == '1' ?>
    <?php $gg = false == null ?>
    <?php $hh = false == 'php' ?>

    <?php $aa_1 = 1 == true ?>
    <?php $bb_2 = 1 == false ?>
    <?php $cc_3 = 1 == 1 ?>
    <?php $dd_4 = 1 == 0 ?>
    <?php $ee_5 = 1 == -1 ?>
    <?php $ff_6 = 1 == '1' ?>
    <?php $gg_7 = 1 == null ?>
    <?php $hh_8 = 1 == 'php' ?>

    <?php $aa_9 = 0 == true ?>
    <?php $bb_10 = 0 == false ?>
    <?php $cc_11 = 0 == 1 ?>
    <?php $dd_12 = 0 == 0 ?>
    <?php $ee_13 = 0 == -1 ?>
    <?php $ff_14 = 0 == '1' ?>
    <?php $gg_15 = 0 == null ?>
    <?php $hh_16 = 0 == 'php' ?>

    <?php $aa_18 = -1 == true ?>
    <?php $bb_19 = -1 == false ?>
    <?php $cc_20 = -1 == 1 ?>
    <?php $dd_21 = -1 == 0 ?>
    <?php $ee_22 = -1 == -1 ?>
    <?php $ff_23 = -1 == '1' ?>
    <?php $gg_24 = -1 == null ?>
    <?php $hh_25 = -1 == 'php' ?>

    <?php $aa_26 = '1' == true ?>
    <?php $bb_27 = '1' == false ?>
    <?php $cc_28 = '1' == 1 ?>
    <?php $dd_29 = '1' == 0 ?>
    <?php $ee_30 = '1' == -1 ?>
    <?php $ff_31 = '1' == '1' ?>
    <?php $gg_32 = '1' == null ?>
    <?php $hh_33 = '1' == 'php' ?>

    <?php $aa_34 = null == true ?>
    <?php $bb_35 = null == false ?>
    <?php $cc_36 = null == 1 ?>
    <?php $dd_37 = null == 0 ?>
    <?php $ee_38 = null == -1 ?>
    <?php $ff_39 = null == '1' ?>
    <?php $gg_40 = null == null ?>
    <?php $hh_41 = null == 'php' ?>

    <?php $aa_42 = 'php' == true ?>
    <?php $bb_43 = 'php' == false ?>
    <?php $cc_44 = 'php' == 1 ?>
    <?php $dd_45 = 'php' == 0 ?>
    <?php $ee_46 = 'php' == -1 ?>
    <?php $ff_47 = 'php' == '1' ?>
    <?php $gg_48 = 'php' == null ?>
    <?php $hh_49 = 'php' == 'php' ?>

    <table>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>

        <tr>
        <td>true</td>
        <td><?php echo $a ?></td>
        <td><?php echo $b ?></td>
        <td><?php echo $c ?></td>
        <td><?php echo $d ?></td>
        <td><?php echo $e ?></td>
        <td><?php echo $f ?></td>
        <td><?php echo $g ?></td>
        <td><?php echo $h ?></td>
        </tr>

        <tr>
        <td>false</td>
        <td><?php echo $aa ?></td>
        <td><?php echo $bb ?></td>
        <td><?php echo $cc ?></td>
        <td><?php echo $dd ?></td>
        <td><?php echo $ee ?></td>
        <td><?php echo $ff ?></td>
        <td><?php echo $gg ?></td>
        <td><?php echo $hh ?></td>
        </tr>

        <tr>
        <td>1</td>
        <td><?php echo $aa_1 ?></td>
        <td><?php echo $bb_2 ?></td>
        <td><?php echo $cc_3 ?></td>
        <td><?php echo $dd_4 ?></td>
        <td><?php echo $ee_5 ?></td>
        <td><?php echo $ff_6 ?></td>
        <td><?php echo $gg_7 ?></td>
        <td><?php echo $hh_8 ?></td>
        </tr>

        <tr>
        <td>0</td>
        <td><?php echo $aa_9 ?></td>
        <td><?php echo $bb_10 ?></td>
        <td><?php echo $cc_11 ?></td>
        <td><?php echo $dd_12 ?></td>
        <td><?php echo $ee_13 ?></td>
        <td><?php echo $ff_14 ?></td>
        <td><?php echo $gg_15 ?></td>
        <td><?php echo $hh_16 ?></td>
        </tr>

        <tr>
        <td>-1</td>
        <td><?php echo $aa_18 ?></td>
        <td><?php echo $bb_19 ?></td>
        <td><?php echo $cc_20 ?></td>
        <td><?php echo $dd_21 ?></td>
        <td><?php echo $ee_22 ?></td>
        <td><?php echo $ff_23 ?></td>
        <td><?php echo $gg_24 ?></td>
        <td><?php echo $hh_25 ?></td>
        </tr>

        <tr>
        <td>'1'</td>
        <td><?php echo $aa_26 ?></td>
        <td><?php echo $bb_27 ?></td>
        <td><?php echo $cc_28 ?></td>
        <td><?php echo $dd_29 ?></td>
        <td><?php echo $ee_30 ?></td>
        <td><?php echo $ff_31 ?></td>
        <td><?php echo $gg_32 ?></td>
        <td><?php echo $hh_33 ?></td>
        </tr>

        <td>null</td>
        <td><?php echo $aa_34 ?></td>
        <td><?php echo $bb_35 ?></td>
        <td><?php echo $cc_36 ?></td>
        <td><?php echo $dd_37 ?></td>
        <td><?php echo $ee_38 ?></td>
        <td><?php echo $ff_39 ?></td>
        <td><?php echo $gg_40 ?></td>
        <td><?php echo $hh_41 ?></td>
        </tr>

        <td>'php'</td>
        <td><?php echo $aa_42 ?></td>
        <td><?php echo $bb_43 ?></td>
        <td><?php echo $cc_44 ?></td>
        <td><?php echo $dd_45 ?></td>
        <td><?php echo $ee_46 ?></td>
        <td><?php echo $ff_47 ?></td>
        <td><?php echo $gg_48 ?></td>
        <td><?php echo $hh_49 ?></td>
        </tr>

    </table>



    <h2>Жесткое сравнение в PHP</h1>

    <?php $a_ = true === true ?>
    <?php $b_ = true === false ?>
    <?php $c_ = true === 1 ?>
    <?php $d_ = true === 0 ?>
    <?php $e_ = true === -1 ?>
    <?php $f_ = true === '1' ?>
    <?php $g_ = true === null ?>
    <?php $h_ = true === 'php' ?>

    <?php $aa_ = false === true ?>
    <?php $bb_ = false === false ?>
    <?php $cc_ = false === 1 ?>
    <?php $dd_ = false === 0 ?>
    <?php $ee_ = false === -1 ?>
    <?php $ff_ = false === '1' ?>
    <?php $gg_ = false === null ?>
    <?php $hh_ = false === 'php' ?>

    <?php $aa_1_ = 1 === true ?>
    <?php $bb_2_ = 1 === false ?>
    <?php $cc_3_ = 1 === 1 ?>
    <?php $dd_4_ = 1 === 0 ?>
    <?php $ee_5_ = 1 === -1 ?>
    <?php $ff_6_ = 1 === '1' ?>
    <?php $gg_7_= 1 === null ?>
    <?php $hh_8_ = 1 === 'php' ?>

    <?php $aa_9_ = 0 === true ?>
    <?php $bb_10_ = 0 === false ?>
    <?php $cc_11_ = 0 === 1 ?>
    <?php $dd_12_ = 0 === 0 ?>
    <?php $ee_13_ = 0 === -1 ?>
    <?php $ff_14_ = 0 === '1' ?>
    <?php $gg_15_ = 0 === null ?>
    <?php $hh_16_ = 0 === 'php' ?>

    <?php $aa_18_ = -1 === true ?>
    <?php $bb_19_ = -1 === false ?>
    <?php $cc_20_ = -1 === 1 ?>
    <?php $dd_21_ = -1 === 0 ?>
    <?php $ee_22_ = -1 === -1 ?>
    <?php $ff_23_ = -1 === '1' ?>
    <?php $gg_24_ = -1 === null ?>
    <?php $hh_25_ = -1 === 'php' ?>

    <?php $aa_26_ = '1' === true ?>
    <?php $bb_27_ = '1' === false ?>
    <?php $cc_28_ = '1' === 1 ?>
    <?php $dd_29_ = '1' === 0 ?>
    <?php $ee_30_ = '1' === -1 ?>
    <?php $ff_31_ = '1' === '1' ?>
    <?php $gg_32_ = '1' === null ?>
    <?php $hh_33_ = '1' === 'php' ?>

    <?php $aa_34_ = null === true ?>
    <?php $bb_35_ = null === false ?>
    <?php $cc_36_ = null === 1 ?>
    <?php $dd_37_ = null === 0 ?>
    <?php $ee_38_ = null === -1 ?>
    <?php $ff_39_ = null === '1' ?>
    <?php $gg_40_ = null === null ?>
    <?php $hh_41_ = null === 'php' ?>

    <?php $aa_42_ = 'php' === true ?>
    <?php $bb_43_ = 'php' === false ?>
    <?php $cc_44_ = 'php' === 1 ?>
    <?php $dd_45_ = 'php' === 0 ?>
    <?php $ee_46_ = 'php' === -1 ?>
    <?php $ff_47_= 'php' === '1' ?>
    <?php $gg_48_ = 'php' === null ?>
    <?php $hh_49_ = 'php' === 'php' ?>

    <table>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>

        <tr>
        <td>true</td>
        <td><?php echo $a_ ?></td>
        <td><?php echo $b_ ?></td>
        <td><?php echo $c_ ?></td>
        <td><?php echo $d_ ?></td>
        <td><?php echo $e_?></td>
        <td><?php echo $f_ ?></td>
        <td><?php echo $g_ ?></td>
        <td><?php echo $h_ ?></td>
        </tr>

        <tr>
        <td>false</td>
        <td><?php echo $aa_ ?></td>
        <td><?php echo $bb_ ?></td>
        <td><?php echo $cc_ ?></td>
        <td><?php echo $dd_ ?></td>
        <td><?php echo $ee_ ?></td>
        <td><?php echo $ff_ ?></td>
        <td><?php echo $gg_ ?></td>
        <td><?php echo $hh_ ?></td>
        </tr>

        <tr>
        <td>1</td>
        <td><?php echo $aa_1_ ?></td>
        <td><?php echo $bb_2_ ?></td>
        <td><?php echo $cc_3_ ?></td>
        <td><?php echo $dd_4_ ?></td>
        <td><?php echo $ee_5_ ?></td>
        <td><?php echo $ff_6_ ?></td>
        <td><?php echo $gg_7_ ?></td>
        <td><?php echo $hh_8_ ?></td>
        </tr>

        <tr>
        <td>0</td>
        <td><?php echo $aa_9_ ?></td>
        <td><?php echo $bb_10_ ?></td>
        <td><?php echo $cc_11_ ?></td>
        <td><?php echo $dd_12_ ?></td>
        <td><?php echo $ee_13_ ?></td>
        <td><?php echo $ff_14_ ?></td>
        <td><?php echo $gg_15_ ?></td>
        <td><?php echo $hh_16_ ?></td>
        </tr>

        <tr>
        <td>-1</td>
        <td><?php echo $aa_18_ ?></td>
        <td><?php echo $bb_19_ ?></td>
        <td><?php echo $cc_20_ ?></td>
        <td><?php echo $dd_21_ ?></td>
        <td><?php echo $ee_22_ ?></td>
        <td><?php echo $ff_23_ ?></td>
        <td><?php echo $gg_24_ ?></td>
        <td><?php echo $hh_25_ ?></td>
        </tr>

        <tr>
        <td>'1'</td>
        <td><?php echo $aa_26_ ?></td>
        <td><?php echo $bb_27_ ?></td>
        <td><?php echo $cc_28_ ?></td>
        <td><?php echo $dd_29_ ?></td>
        <td><?php echo $ee_30_ ?></td>
        <td><?php echo $ff_31_ ?></td>
        <td><?php echo $gg_32_?></td>
        <td><?php echo $hh_33_ ?></td>
        </tr>

        <td>null</td>
        <td><?php echo $aa_34_ ?></td>
        <td><?php echo $bb_35_ ?></td>
        <td><?php echo $cc_36_ ?></td>
        <td><?php echo $dd_37_ ?></td>
        <td><?php echo $ee_38_ ?></td>
        <td><?php echo $ff_39_ ?></td>
        <td><?php echo $gg_40_ ?></td>
        <td><?php echo $hh_41_?></td>
        </tr>

        <td>'php'</td>
        <td><?php echo $aa_42_ ?></td>
        <td><?php echo $bb_43_ ?></td>
        <td><?php echo $cc_44_ ?></td>
        <td><?php echo $dd_45_ ?></td>
        <td><?php echo $ee_46_ ?></td>
        <td><?php echo $ff_47_ ?></td>
        <td><?php echo $gg_48_ ?></td>
        <td><?php echo $hh_49_ ?></td>
        </tr>

    </table>


</body>

</html>