package dombosco.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import dombosco.dominio.Produto;

@Repository
public interface ProdutoRepository extends CrudRepository<Produto, Long>{

}
