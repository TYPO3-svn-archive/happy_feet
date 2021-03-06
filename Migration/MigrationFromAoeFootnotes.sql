SET @rank=0;
INSERT INTO tx_happyfeet_domain_model_footnote (  
 
  pid,
  tstamp,
  crdate,
  cruser_id,
  sorting,
  t3ver_oid,
  t3ver_id,
  t3ver_wsid,
  t3ver_label,
  t3ver_state,
  t3ver_stage,
  t3ver_count,
  t3ver_tstamp,
  t3_origuid,
  sys_language_uid ,
  l18n_parent ,
  l18n_diffsource ,
  deleted,
  hidden,
  starttime,
  endtime,
  title,
  description,
  header,
  index_number
)
SELECT  
  pid,
  tstamp,
  crdate,
  cruser_id,
  sorting,
  t3ver_oid,
  t3ver_id,
  t3ver_wsid,
  t3ver_label,
  t3ver_state,
  t3ver_stage,
  t3ver_count,
  t3ver_tstamp,
  t3_origuid,
  sys_language_uid ,
  l18n_parent ,
  l18n_diffsource ,
  deleted,
  hidden,
  starttime,
  endtime,
  title,
  description,
  header,
	( @rank:=@rank+1) AS index_number FROM tx_aoefootnote_item WHERE deleted=0;