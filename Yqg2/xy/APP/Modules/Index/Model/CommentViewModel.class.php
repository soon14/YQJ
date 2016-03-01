<?php

class CommentViewModel extends ViewModel{

	protected $viewFields = array(
		'user' => array(
			'id','username',
			'_type'=>'LEFT'
			),
		'comment' => array(
			'content','start','_on'=>'user.id = comment.uid'
			)
	);

	public function getAll($where){
		return $this->where($where)->limit($limit)->order('time DESC')->select();
	}

}