SELECT 	position.pos_id,
		position.pos_name,
		account.acct_lname,
		account.acct_fname,
		COUNT(candidate_votes.cand_vot_id) AS votes

FROM election_candidate

LEFT OUTER JOIN candidate_votes ON election_candidate.elect_cand_id = candidate_votes.elect_cand_id 
				
RIGHT OUTER JOIN account ON election_candidate.acct_id = account.acct_id					
LEFT OUTER JOIN election ON election_candidate.elect_id = election.elect_id
RIGHT OUTER JOIN position ON election_candidate.pos_id = position.pos_id 
		AND position.div_id = 2 
		AND election_candidate.status = 1
		AND election_candidate.elect_id = (	SELECT election.elect_id 
											FROM election 
											WHERE election.status = 1)
LEFT OUTER JOIN division ON position.div_id = division.div_id

WHERE position.div_id = 2

GROUP BY election_candidate.elect_cand_id, position.pos_id
ORDER BY position.order_no, account.acct_lname ASC;
