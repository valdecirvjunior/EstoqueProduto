package dombosco.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import dombosco.dominio.Cliente;

@Repository
public interface ClienteRepository extends CrudRepository<Cliente, Long>{

}
