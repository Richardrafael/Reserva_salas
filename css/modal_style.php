<?php
?>


<style>
  * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  @font-face {
    font-family: "Segoe UI";
    src: url("segoe-ui.otf") format("otf");
  }

  body {
    font-family: 'Segoe UI';
    text-align: center;
    width: 100vw;
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    overflow-x: hidden;
  }

  .error {
    color: rgba(151, 22, 22, 0.918);
    font-size: 1.4rem;
    font-weight: 700;
  }

  .sucesso {
    color: rgb(15, 104, 49);
    font-size: 1.4rem;
    font-weight: 700;
  }

  .descrition {
    font-size: 1.1rem;
    font-weight: 500;
  }

  .hours {
    font-size: 1.5rem;
    font-weight: 600;
    gap: 1.3rem;
    display: flex;
    align-items: center;
  }

  .volte {
    color: rgba(0, 0, 0, 0.918);
    font-size: 1.2rem;
    font-weight: 500;
  }

  .container-results {
    display: flex;
    padding: 1rem;
    gap: 1rem;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 80%;
    height: 40%;
    background-color: rgba(218, 218, 218, 0.171);
    box-shadow: 0px 4px 4px 0px rgba(109, 109, 109, 0.25);
    border-radius: 1rem;
  }

  .btn {
    background-color: #1d9cdb;
    color: #fff;
    border: none;
    width: 40%;
    font-weight: 600;
    border-radius: 100px;
    font-size: 1.3rem;
    padding: 0.4rem;
    cursor: pointer;
  }

  .header {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    width: 90vw;
    align-items: center;
  }

  .botao-seta {
    display: flex;
    border-radius: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
    align-items: center;
    /* padding-left: 1rem; */
    /* margin: 2rem 0rem 1rem 4rem; */
    border: none;
    /* background: #000; */
  }

  .logo {
    width: 12rem;
  }

  a {
    text-decoration: none;
    color: #039be5;
    border: none !important;
  }

  a:hover {
    text-decoration: none;
    border: none !important;
  }

  .botao-seta i {
    font-size: 3rem;
    text-decoration: none;
  }

  @media screen and (max-width: 768px) {
    .logo {
      width: 10rem;
    }


  }
</style>