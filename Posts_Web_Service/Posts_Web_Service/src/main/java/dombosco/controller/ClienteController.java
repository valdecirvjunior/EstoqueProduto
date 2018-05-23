package dombosco.controller;

import java.util.Collection;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import dombosco.dominio.Cliente;
import dombosco.repository.ClienteRepository;

@RestController
public class ClienteController {
	
	
	@Autowired 
	ClienteRepository clientRep;
	@GetMapping("/client")
	public Collection<Cliente> listaProduto() {
		return (Collection<Cliente>) clientRep.findAll();
	}
	
	
	 @PostMapping("/cadclient")
	    public String createCliente(@Valid @RequestBody Cliente client) {
		 clientRep.save(client);
	        return "Cadastrado!";
	    }
	
}
