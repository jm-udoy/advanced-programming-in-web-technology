import React from "react";
import { Container, Navbar } from "react-bootstrap";
import "./Footer.css";
import "bootstrap/dist/css/bootstrap.min.css";

const Footer = () => {
  return (
    <>
      <Navbar
        className="d-flex justify-content-center"
        fixed="bottom"
        bg="dark"
        variant="dark"
      >
        <span className=" footer__text">
          <h5 className="text-warning">&copy; 2022 - basicapp.com</h5>
        </span>
      </Navbar>
    </>
  );
};

export default Footer;
