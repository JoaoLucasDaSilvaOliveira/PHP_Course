import { useState } from "react";
import "./App.css";

function App() {
const [showAllUsers, setShowAllUsers] = useState(false);

  return (
    <div className="app">
      <h1>Vamos testar um projeto de apiRestful</h1>
      <h3>Clique em algum dos botões!</h3>
      <span>
        <button >Procurar todos os usuários</button>
        <button >Procurar usuário por ID</button>
        <button>Criar um usuário</button>
        <button>Atualizar um usuário</button>
        <button>Excluir um usuário</button>
      </span>
    </div>
  );
}

export default App;
