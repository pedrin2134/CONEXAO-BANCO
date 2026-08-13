<?php
// model/dao/UsuarioDAO.php
    class UsuarioDAO {

        public function cadastrar(UsuarioDTO $u) {
            try {
                $sql = "INSERT INTO login (nome, email, senha, perfil_id) VALUES (?, ?, ?, ?)";
                $stmt = Conexao::getConexao()->prepare($sql);
                
                return $stmt->execute([
                    $u->getNome(), 
                    $u->getEmail(), 
                    $u->getSenha(), 
                    $u->getPerfilId()
                ]);
            } catch (PDOException $e) {
                // Exibe a mensagem de erro exata do MySQL na tela para debug
                echo "<p style='color:red;'><b>Erro MySQL:</b> " . $e->getMessage() . "</p>";
                return false;
            }
        }
        
    }
