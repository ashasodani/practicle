<?php
include 'model.php';
class control
{
	function insert($fname,$lname,$gender,$education)
	{
		$i=new model();
		$ii=$i->insert($fname,$lname,$gender,$education);
		return $ii;
	}
	function list1()
	{
		$l=new model();
		$ll=$l->list1();
		return $ll;
	}
	function delete($did)
	{
		$d=new model();
		$dd=$d->delete($did);
	}
	function update($edit_id)
	{	
		$e=new model();
		$ee=$e->update($edit_id);
		return $ee;


	}
	function edit($edit_id,$fname,$lname,$gender,$education)
	{
		$u=new model();
		$uu=$u->edit($edit_id,$fname,$lname,$gender,$education);
		return $uu;
		
	}
}
?>