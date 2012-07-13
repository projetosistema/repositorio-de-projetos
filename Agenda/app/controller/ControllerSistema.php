<?php

/**
 * Responsável por controlar todos o fluxo do sistema administrativo.
 *
 * @author nelsonmota
 * @create 10/07/2012
 * 
 */
class ControllerSistema  extends Controller{
    
    
    /**
     * Nome do controller e o nome da pasta dentro da pasta view
     * @var $name;
     */
    
     var $name = 'sistema';
     
    /**
     * Método construtor da classe
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    function __construct(){
        parent::__construct();
        $this->assign('name', '<|Nome do local|>');
    }
    
    /**
     * Método responsável por mostrar a tpl do local que será feito o serviço.
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function index()
    {
        $this->display('index.tpl');
    }
    
    /**
     * Mostra o template principal do do gerenciamento
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function agenda()
    {
        $this->display('agenda.tpl');
    }
    
    /**
     * Faz um novo agendamento
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return void;
     */
    
    public function novo(){
        $this->display('agenda-novo.tpl');
    }
    
    
    /**
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 10/07/2012
     * @return object JSON : Agendamentos nos seus devidos horarios
     */
    
    public function calendario(){}
    
    
    
    /**
     * Template que mostra quais as reservas tem cadastradas.
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function reserva(){
        $this->display('reserva.tpl');
    }
    
    
    /**
     * Template de cadastro de um centro de reserva
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function reservanovo(){
        $this->display('reserva-novo.tpl');
    }
    
    
    /**
     * Template da administraçao de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function servico(){
        $this->display('servico.tpl');
    }
    
    /**
     * Template do cadastro de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    
    public function serviconovo(){
        $this->display('servico-novo.tpl');
    }
    
    
    /**
     * Template da administracao de locais de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function local()
    {
        $this->display('local.tpl');
    }
    
    
    /**
     * Template de cadastro de locais de serviços
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 12/07/2012
     * 
     */
    public function localnovo()
    {
        $this->display('local-novo.tpl');
    }
    
    /**
     * Apresenta o form ao qual o usuário colocará um novo endereço do local
     * @author Nelson Mota
     * @access public
     * @version 0.1
     * @create 13/07/2012
     * 
     */
    
    public function localform()
    {
        $this->display('local-form.tpl');
    }
}

?>
