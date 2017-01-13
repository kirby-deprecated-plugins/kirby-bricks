<?php
namespace JensTornell\Bricks;

function root() {
	if( ! empty( kirby()->roots()->bricks() ) ) {
		return kirby()->roots()->bricks();
	 }
	 return kirby()->roots()->site() . DS . 'bricks';
}