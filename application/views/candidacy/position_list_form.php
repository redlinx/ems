<?php
	echo form_open('candidacy/select_position');

	for($x=0;$x<count($list);$x++)
	{
		$position[$x]['name'] = 'position';
		$position[$x]['id'] = 'position';
		$position[$x]['value'] = $list[$x]['pos_id'];
		$position[$x]['checked'] = 'checked';

		echo form_radio($position[$x]) . $list[$x]['pos_name'] . '<br>';
	}

	echo form_submit('mysubmit', 'Submit Application');
	echo form_close();
?>

