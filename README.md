# CodeIgniter + Teamspeak 3 library

Clean Codeigniter PHP Framework with Teamspeak 3 library.
https://github.com/planetteamspeak/ts3phpframework

### Example:
```
...
    $this->load->library('teamspeak3_lib');
    ...
    $host = 'ts3.domain.com';
    $sport = 9987; // server port
    $port = 10011; // query port
    $user = 'serverquery'; // query user
    $pass = '123456789'; // query password
    
    $connection_string = "serverquery://$user:$pass@$host:$port/?nickname=$user&server_port=$sport";
    ...
	try {
		$this->vserver = $this->teamspeak3_lib->factory($connection_string);
		
		$channels = $this->vserver->channelList();
		foreach ($channels as $channel) {
			print $channel . '<br />';
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
...
```