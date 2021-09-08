<table>
<thead>
<tr>

<td rowspan=1 align='center' width=20px; bgcolor=#c0c0c0>№п/п</td>

<td rowspan=1 align='center' style="width: 40%" bgcolor=#c0c0c0>Имя+Фамилия</td>

<td rowspan=1 align='center' style="width: 20%" bgcolor=#c0c0c0>Заработная плата</td>

<td rowspan=1 align='center' style="width: 20%" bgcolor=#c0c0c0>Налог</td>

<td rowspan=1 align='center' style="width: 20%" bgcolor=#c0c0c0>Зароботная плата с вычетом налога</td>


</tr>
</thead>
<?php $i = 1;


foreach ($employees as $employee) {

?>

<tr>

<td><?= $i ?></td>

<td><?= $employee->name, $employee->surname?></td>

<td><?= $employee->salary ?></td>

<td>
<?php if($employee->salary <= 10000){ ?>
        <?= $tax = $employee->salary*0.1; ?>
    <?php }elseif($employee->salary <= 25000){ ?>
        <?= $tax = $employee->salary*0.15; ?>
    <?php }else{ ?>
        <?= $tax = $employee->salary*0.2; ?>
    <?php }?>
</td>
<td><?= $employee->salary - $tax ?></td>
</tr>

<?php $i++;

} ?>

</table>