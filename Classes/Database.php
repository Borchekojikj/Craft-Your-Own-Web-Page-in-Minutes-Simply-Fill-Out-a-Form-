<?php



class Connection
{
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $connection;
    private $dbType;


    public function __construct($dbType, $host, $dbName, $username, $password)
    {
        $this->setDbType($dbType);
        $this->setHost($host);
        $this->setDbName($dbName);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function connect()
    {
        $host = $this->getHost();
        $dbName = $this->getDbName();
        $username = $this->getUsername();
        $password = $this->getPassword();
        $dbType = $this->getDbType();
        $connection = null;
        try {
            $connection = new \PDO("$dbType:host=$host;dbname=$dbName", $username, $password);
            $connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
        $this->setConnection($connection);
    }

    public function destroy()
    {
        $this->setConnection(null);
    }

    /**
     * Get the value of host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of dbName
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Set the value of dbName
     *
     * @return  self
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set the value of connection
     *
     * @return  self
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Get the value of dbType
     */
    public function getDbType()
    {
        return $this->dbType;
    }

    /**
     * Set the value of dbType
     *
     * @return  self
     */
    public function setDbType($dbType)
    {
        $this->dbType = $dbType;

        return $this;
    }
}
