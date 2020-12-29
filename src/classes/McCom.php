<?php

/**
 * MCCom - A complete Minecraft Spigot command sending class.
 */
class McCom
{
	private $host;
	private $port;
	private $password;
	private $handle;
	private $connector;

	function __construct($host, $port, $password, $connector)
	{
		$this->host = $host;
		$this->port = $port;
		$this->password = $password;

		$connector = strtolower($connector);
		$connectors = ["websend", "websender", "rcon"];

		if (!in_array($connector, $connectors))
			throw new Exception("Invalid connector. Available connector: websend, websender, rcon", 1);

		$this->connector = $connector;
	}

	public function connect()
	{
		if ($this->connector == "websend")
		{
			$this->handle = new Websend($this->host);
			$this->handle->password = $this->password;
			$this->handle->port = $this->port;

			return $this->handle->connect();
		}

		if ($this->connector == "websender")
		{
			$this->handle = new WebsenderAPI($this->host, $this->password, $this->port);

			return $this->handle->connect();
		}

		if ($this->connector == "rcon")
		{
			$this->handle = new Rcon($this->host, $this->port, $this->password, 3);

			return $this->handle->connect();
		}
	}

	public function sendCommand($command)
	{
		if ($this->connector == "websend")
		{
			$this->handle->doCommandAsConsole($command);
		}

		if ($this->connector == "websender")
		{
			$this->handle->sendCommand($command);
		}

		if ($this->connector == "rcon")
		{
			$this->handle->sendCommand($command);
		}
	}
}

?>