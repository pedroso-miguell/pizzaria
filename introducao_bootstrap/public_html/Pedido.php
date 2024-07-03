<?php
include_once '../public_html/Conectar.php';
class Pedido
{
    private $id;
    private $nome;
    private $email;
    private $telefone;
	private $sexo;
	private $nascimento;
	private $cidade;
	private $endereco;
    private $con;


   
   

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * @return mixed
	 */
	public function getNascimento() {
		return $this->nascimento;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}

	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}
	
	/**
	 * @param mixed $sexo 
	 * @return self
	 */
	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}
	
	/**
	 * @param mixed $nascimento 
	 * @return self
	 */
	public function setNascimento($nascimento): self {
		$this->nascimento = $nascimento;
		return $this;
	}
	
	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}

    public function salvar()
    {
        $this->con = new Conectar();
        $sql = "INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, cidade, endereco  ) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $sql = $this->con->prepare($sql);
        $sql->bindValue(1, $this->nome);
        $sql->bindValue(2, $this->email);
        $sql->bindValue(3, $this->telefone);
        $sql->bindValue(4, $this->sexo);
        $sql->bindValue(5, $this->nascimento);
        $sql->bindValue(6, $this->cidade);
        $sql->bindValue(7, $this->endereco);

    	return $sql->execute() == 1 ? TRUE : FALSE;
    }
   
}
