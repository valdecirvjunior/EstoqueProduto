package dombosco.controller;

import java.util.Collection;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import dombosco.dominio.Produto;
import dombosco.repository.ProdutoRepository;

@RestController
public class ProdutoController {
	
	
	@Autowired 
	ProdutoRepository productRep;
	@GetMapping("/product")
	public Collection<Produto> listaProduto() {
		return (Collection<Produto>) productRep.findAll();
	}
	
	
	 @PostMapping("/cadproduct")
	    public String createProduto(@Valid @RequestBody Produto product) {
		 productRep.save(product);
	        return "Cadastrado!";
	    }
	
}
