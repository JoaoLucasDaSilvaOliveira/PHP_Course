import { useState } from "react";
import "./App.css";
import Find from "./components/Find";

function App() {
  const [text1, setText1] = useState("Vamos testar um projeto de apiRestful");
  const [text2, setText2] = useState("Clique em algum dos botões!");
  const [showFindAll, setShowFindAll] = useState(false); // Estado para controlar a renderização do FindAll
  const [showInput, setshowInput] = useState(false);

  return (
    <div className="app">
      <h1>{text1}</h1>
      <h2>{text2}</h2>
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
