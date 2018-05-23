package dombosco.controller;

import java.util.Collection;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import dombosco.dominio.Post;
import dombosco.repository.PostRepository;

@RestController
public class PostController {
	
	
	@Autowired 
	PostRepository postRep;

	@GetMapping("/posts")
	public Collection<Post> listaPosts() {
		return (Collection<Post>) postRep.findAll();
	}
	
	
	 @PostMapping("/cadastro")
	    public String createLote(@Valid @RequestBody Post post) {
	        postRep.save(post);
	        return "Cadastrado!";
	    }
	
}
