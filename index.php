<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable

$characters = json_decode($data); // decode the JSON feed
// echo $characters[0]->name;
// foreach ($characters as $character) {
// 	echo $character->name . '<br>';
// }

$characters2 = json_decode($data, true); // when true the data becomes an associative array instead of an object. This means we’ll be using square bracket notation[] instead of the skinny arrow->.
// echo $characters2[0]['race'];
foreach ($characters2 as $character) {
	echo $character['race'] . "<br>";
}

?>

 <table>
	<tbody>
		<tr>
			<th>Name</th>
			<th>Race</th>
		</tr>
		<?php foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->name; ?> </td>
            <td> <?php echo $character->race; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
