<div id="container_1">Add Election</div>
<div id="container_2">
<?php
	
	$url = 'http://www3.uic.edu.ph/images/100x102/'.$student_id.'.jpg';

		echo '<div id="container_3">';
		echo '<div id="container_5"><img src="'.$url.'" width=180></div>';
		echo '<div id="container_6">';
		echo '<ul>';

		echo '<li><a href="'.base_url('index.php/home').'">My Profile</a></li>';
		
		$time_status = $election_countdown['time_status'];
		$cur_time = $election_countdown['cur_time'];
		$end_time = $election_countdown['end_time'];

		if($time_status <= 0 AND $cur_time <= $end_time)
		{
			if($elect_sched[0]['cur_time'] >= '2014-03-18 07:30:00')
				{
					if($elect_sched[0]['cur_time'] <= '2014-03-18 12:00:00')
					{
						echo '<li><a href="'.base_url('index.php/ballot').'">Vote Candidates</a></li>';
					}
					else if($elect_sched[0]['prog_id'] == $prog_id AND $elect_sched[0]['cur_time'] >= $elect_sched[0]['start_date'] AND $elect_sched[0]['cur_time'] <= $elect_sched[0]['end_date'])
					{
						echo '<li><a href="'.base_url('index.php/ballot').'">Vote Candidates</a></li>';
					}
				}
			echo '<li><a href="'.base_url().'index.php/results">SSG Election Results</a></li>';
			echo '<li><a href="'.base_url().'index.php/program_result">Program Election Results</a></li>';
			echo '<li><a href="'.base_url().'index.php/voter_statistics">Voter Statistics</a></li>';
		}
		if($is_commissioner == FALSE)
		{
			echo '<li><a href="'.base_url().'index.php/ssg_applicant_list">Applicant List</a></li>'; 
			echo '<li><a href="'.base_url().'index.php/add_party">Add Party</a></li>';
			echo '<li><a href="'.base_url().'index.php/add_election">Add Election</a></li>';
			echo '<li><a href="'.base_url().'index.php/add_commissioner">Add Commissioner</a></li>';
		}
		echo '<li><a href="'.base_url().'index.php/voter_registration">Register Voter</a></li>';

		echo '</ul>';
		echo '</div>';
		echo '</div>';

	echo '<div id="container_4">';
	echo '<div id="container_9">';
?>

<?php
	
	$elect_id = array(
						'type'  => 'hidden',
						'name'  => 'elect_id',
						'value' => $elect_id
						);
	$school_year = array(
						'name'  => 'school_year',
						'value' => $page_view_data[0]['school_year']
						);
	$start_date = array(
						'name'  => 'start_date',
						'value' => $page_view_data[0]['start_date']
						);
	$end_date = array(
						'name'  => 'end_date',
						'value' => $page_view_data[0]['end_date']
						);

    echo form_open('add_election/update_election_sched');
    echo form_input($elect_id);
    echo form_input($school_year);
    echo '<br>';
    echo form_input($start_date);
    echo '&nbsp&nbsp-&nbsp&nbsp';
    echo form_input($end_date);
    echo form_submit('submit', 'Edit');
    echo '<br><br>';

	echo '</div>';
	echo '</div>';
	?>
</div>