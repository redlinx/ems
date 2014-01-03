SELECT *
FROM election_voter
LEFT OUTER JOIN election_candidate ON election_voter.acct_id = election_candidate.acct_id
INNER JOIN account ON election_voter.acct_id = account.acct_id
INNER JOIN election ON election_voter.elect_id = election.elect_id

WHERE election_voter.acct_id = 2
AND election_candidate.elect_cand_id IS NULL
AND election.status = 1