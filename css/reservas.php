<?php ?>

<style>
  * {
    margin: 0;
    padding: 0;
  }

  .form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    gap: .6rem;
    padding: 1rem 0rem;
  }

  body {
    width: 100vw;
    height: 100vh;

  }

  .container {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
    width: 100%;
    padding: 3rem;
  }

  .container_1 {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
    /* width: 100%; */
    padding: 3rem;
  }

  /* form {
    width: 100%;
  } */

  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .form div {
    width: 90%;
    margin: 0 auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .form input[type=text],
  .form input[type=email],
  .form input[type="password"],
  .form input[type="number"] {
    padding: 15px 10px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #999;
    margin: 10px 0;
  }

  input[type="date"],
  input[type="time"],
  textarea {
    padding: 15px 10px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #999;
    margin: 10px 0;
  }

  span {
    padding: 15px 10px;
    width: 100%;
    border-radius: 5px;
    /* border: 1px solid #999; */
    margin: 10px 0;
    justify-content: center;
    display: flex;
    font-size: 1.2rem;
  }


  .form div p {
    padding: 15px 0 0 0;
  }

  .form .btn {
    margin-top: 25px;
    width: 50%;
    background-color: #102b4e;
    padding: 15px 0;
    color: #fff;
    border: none;
    border-radius: 100px;
    font-size: 1.5rem;
    cursor: pointer;
  }


  .form .loading {
    display: none;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
</style>