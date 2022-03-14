<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan</title>
</head>
<body>
    <?php
    $nama = ["Anita", "Ayu", "Safitri", "Dimas", "Sasa", "Sari", "Alex", "Vania", "Daniel", "Yumna"];
    $indo = [82, 90, 59, 74, 80, 78, 93, 88, 54, 91];
    $mat = [73, 77, 80, 70, 99, 76, 82, 80, 77, 67];
    ?>
    <?php for ($i = 0; $i < count($nama); $i++) : ?>
        <?php echo "Nama : $nama[$i]"; ?> <br>
        <?php echo "Nilai Indonesia : $indo[$i]"; ?> <br>
            <?php if ($indo[$i] > 79) : ?>
                <?php echo "Huruf Indonesia : A" ?>
            <?php elseif ($indo[$i] > 59) : ?>
                <?php echo "Huruf Indonesia : B" ?>
            <?php else : ?>
                <?php echo "Huruf Indonesia : C" ?>
            <?php endif ?> <br>
        <?php echo "Nilai Matematika : $mat[$i]"; ?> <br>
            <?php if ($mat[$i] >= 80) : ?>
                <?php echo "Huruf Matematika : A" ?>
            <?php elseif ($mat[$i] >= 60) : ?>
                <?php echo "Huruf Matematika : B" ?>
            <?php else : ?>
                <?php echo "Huruf Matematika : C" ?>
            <?php endif ?> <br> <br>
    <?php endfor; ?>
</body>
</html>