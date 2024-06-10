<?php
//ESTILO CSS	
//echo '</br></br> ESTILO CSS OK';
?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inconsolata', monospace;
  }

  .bg {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #127fd5;
    flex-direction: column;
  }

  h1 {
    color: white;
  }

  form {
    gap: 1rem;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .container-login {
    position: relative;
    width: 70%;
    background-color: white;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 2rem;
    gap: 1.2rem;
  }

  .container-login .input-box {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .input-box input {
    width: 100%;
    height: 100%;
    background: white;
    border: none;
    outline: none;
    font-weight: 600;
    border-radius: 0.7rem;
    color: #404040;
    border: 1px solid #2196f3;
    font-size: 18px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px 45px 10px 20px;
  }

  .input-box input::placeholder {
    color: #767676;
  }

  .forgot {
    display: flex;
    justify-content: center;
    width: 100%;
    justify-content: start;
    padding: 1rem 0;
  }

  .forgot a {
    color: #404040;
    text-decoration: underline;
    font-size: 16px;
    font-weight: 600;

  }

  .forgot a:hover {
    color: #0c03fc;
  }

  .botao-login {
    background-color: #0c03fd;
    width: 100%;
    border: none;
    height: 32px;
    font-weight: bold;
    outline: none;
    border-radius: 0.7rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    font-size: 16px;
    color: white;
    font-weight: 600;
  }

  .botao-login:hover {
    background-color: #0c03fe;
  }

  .titulo-input {
    background-color: #2196f3;
    width: 100px;
    font-size: 18px;
    font-weight: bold;
    height: 22px;
    bottom: 2rem;
    left: 16px;
    color: #ffffff;
    position: absolute;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    border-radius: 0.7rem;
    text-align: center;
  }

  .container-input {
    width: 100%;
    display: flex;
    gap: 2rem;
    flex-direction: column;
  }

  .container-img {
    display: flex;
    flex-direction: column;
    width: 100%;
    justify-content: center;
    align-items: center;
  }

  .container-img img {
    margin-bottom: 1.25rem;
  }


  .radio-options {
    display: flex;
    flex-direction: row;
    /* gap: 10px; */
    justify-content: space-around;
    width: 100%;
  }

  .radio-label {
    position: relative;
    cursor: pointer;
    display: inline-block;
    line-height: 24px;
  }

  .radio-label input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  .checkmark {
    position: absolute;
    top: 0;
    left: -30px;
    /* Posição inicial da bolinha */
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%;
    transition: left 0.2s;
    /* Animação da bolinha */
  }

  .radio-label:hover input~.checkmark {
    background-color: #ccc;
  }

  .radio-label input:checked~.checkmark {
    background-color: #2196F3;
  }

  /* Estilos para a bolinha */
  .checkmark::after {
    content: "";
    position: absolute;
    display: none;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: white;
  }

  .radio-label input:checked~.checkmark::after {
    display: block;
  }


  .loader {
    width: 48px;
    height: 48px;
    border: 5px solid #70aedc;
    border-bottom-color: white;
    border-radius: 50%;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
  }

  @keyframes rotation {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
</style>