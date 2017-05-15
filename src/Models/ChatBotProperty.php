<?php

namespace Lyfing\ChatBot\Models;

use Illuminate\Database\Eloquent\Model;

class ChatBotProperty extends Model
{
	protected $table = 'chatbot_property';

	protected $fillable = ['unique', 'type', 'name', 'value'];
	
}
