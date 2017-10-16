<?php
	class settingsTS3
	{
		/*
			HostName        (string) : Target host name or IP address.
			UserName        (string) : Query login username.
			PassWord        (string) : Query login password.
			QueryPort       (int)    : Query port. (default 10011)
			VoicePort       (int)    : Voice chat port. (default 9987)
			BotName         (string) : Bot query user name.
			WarnTime        (int)    : Number of seconds for which you want to add warning list the channel.
			DeleteTime      (int)    : Number of seconds for which you want to delete the channel.
			ignoreChannelId (int)    : Channel ID that does not delete. (channel spacer is no delete :).)
		*/
		const HostName     = 'localhost';
		const UserName     = 'serveradmin';
		const PassWord     = '****************';
		const QueryPort    = 10011;
		const VoicePort    = 9987;
		const BotName      = 'Lachesis';
		const WarnTime     = 432000; // 5Day
		const DeleteTime   = 2592000; // 30Day

		static function ignoreChannelId()
		{
			return array(6139, 6331, 14438, 13123, 14436, 14606, 13134, 14437, 5458, 3167, 14638, 14449, 3184, 3185, 3189, 3190, 3191, 3192, 6332, 6333, 6334, 6335, 6451, 6452, 13095, 13096, 13098, 13099, 13100, 3197, 3198, 3199, 14483, 14484, 3202, 3203, 14485, 14560, 14561, 7325, 14309, 14621, 14431, 14467, 14468, 14469, 13819, 13821, 13822, 14432, 14435, 14474, 14434, 14424, 14439, 14420, 14421);
		}
	}

	class settingsSQL
	{
		/*
			HostName (string) : MySQL database host name or IP address.
			UserName (string) : MySQL database login username.
			PassWord (string) : MySQL database login password.
			DataBase (string) : MySQL database name.
			Table    (string) : MySQL database table.
			Charset  (string) : MySQL charset.
		*/
		const HostName = 'localhost';
		const UserName = 'user';
		const PassWord = '***********';
		const DataBase = 'ts3';
		const Table    = 'list';
		const CharSet  = 'utf8mb4';
	}
