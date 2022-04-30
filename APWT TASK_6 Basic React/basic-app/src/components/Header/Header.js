import React from "react";
import { Link } from "react-router-dom";
import "./Header.css";
import { Container, Nav, Navbar, NavDropdown } from "react-bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

const Header = () => {
  return (
    <>
      <Navbar className="bg-warning" collapseOnSelect expand="lg">
        <Container className="text-dark">
          <Link className="brand text-dark" to="/">
            BasicApp
          </Link>
          <Navbar.Toggle aria-controls="responsive-navbar-nav" />
          <Navbar.Collapse id="responsive-navbar-nav">
            <Nav className="m-auto">
              <Link className="nav_bar btn btn-dark" to="/Home">
                Home
              </Link>
              <Link className="nav_bar btn btn-dark mx-3" to="/contact">
                Contact
              </Link>
              <Link className="nav_bar btn btn-dark" to="/about">
                About
              </Link>
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
    </>
  );
};

export default Header;
